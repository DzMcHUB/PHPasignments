<?php
require 'bootstrap.php';
if(!isset($_SESSION['logged']) || $_SESSION['logged'] == 0){
    header('Location: '.URL.'login.php');
    die;
}

$accounts = json_decode(file_get_contents(__DIR__ . '/accounts.json'), 1);
if(isset($accounts)){
    uasort($accounts, function ($a, $b){
        if(isset($a['surname']) && isset($b['surname'])){
            return $a['surname'] <=> $b['surname'];
        }
    });
}
else{
    $accounts = [];
}

// trynimo scenarijus
if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['accountIndex'])){
    if($accounts[$_POST['accountIndex']]['balance'] == 0){
        unset($accounts[$_POST['accountIndex']]);
        file_put_contents(__DIR__ . '/accounts.json', json_encode($accounts));
        $_SESSION['msg'] = 'Sąskaita uždaryta';
    }
    else{
        $_SESSION['error'] = 'Sąskaita nėra tuščia. Uždarymas negalimas';
    }

    header('Location: '.URL.'accounts.php');
    die;
}

// paieskos scenarijus
if('POST' == $_SERVER['REQUEST_METHOD']){
    $rawData = file_get_contents("php://input");
    $request = json_decode($rawData, 1);

    $search = $request['search']; 

    ob_start();
    if (count($accounts) <= 1){?>
        <h2 style="text-align:center">Sąskaitų nėra</h2> <?php
    }
    else{
        foreach($accounts as $key => $user){
            if ($key != 'lastID'){
                if(str_contains ($user['socialNumber'], $search)){
                    ?>
                    
                    <div class = "account_card">
                    <form action="<?= URL?>accounts.php" method="post">
                    <div>Pavardė: <?= $user['surname'] ?></div>
                    <div>Vardas: <?= $user['name'] ?></div>
                    <a class = "link greenbg" href="<?= URL ?>addfunds.php?nr=<?= $key ?>">Pridėti lėšas</a>
                    <div>Asmens kodas: <?= $user['socialNumber'] ?></div>
                    <div>Sąskaitos numeris: <?= chunk_split($user['accountNumber'], 4, ' ') ?></div>
                    <a class = "link redbg" href="<?= URL ?>removefunds.php?nr=<?= $key?>">Atsiimti lėšas</a>
                    <div>Sąskaitos likutis: <?= $user['balance'] ?> €</div>
                    <input type="hidden" name="accountIndex" value="<?= $key ?>">
                    <button class="account_card_button"type="submit">Uždaryti sąskaitą</button>
                    </form>
                    </div>

                    <?php 
                }
            }
        }
    }
    

    $html = ob_get_contents();
    ob_end_clean();

    $response = ['html' => $html];
    header('Content-type: application/json' );
    // echo json_encode($response);
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
    <div class= "container">
    <?php include __DIR__ . '/navigation.php' ?>
    <?php include __DIR__ . '/alert.php' ?>
    <h1>Sąskaitos:</h1>
    <div class="account_search">
    <label for="search">Ieškoti:</label>
    <input name="search" type="search" placeholder=" įveskite asmens kodą" >
    </div>
    <ul class = "card_list" id="results" >
        <?php if (count($accounts) <= 1): ?>
                <h2 style="text-align:center">Sąskaitų nėra</h2>
        <?php else: ?>
        <?php foreach ($accounts as $key => $user): ?>
            <?php if ($key != 'lastID'): ?>
        <div class = "account_card">
            <form action="<?= URL?>accounts.php" method="post">
                <div>Pavardė: <?= $user['surname'] ?></div>
                <div>Vardas: <?= $user['name'] ?></div>
                <a class = "link greenbg" href="<?= URL ?>addfunds.php?nr=<?= $key ?>">Pridėti lėšas</a>
                <div>Asmens kodas: <?= $user['socialNumber'] ?></div>
                <div>Sąskaitos numeris: <?= chunk_split($user['accountNumber'], 4, ' ') ?></div>
                <a class = "link redbg" href="<?= URL ?>removefunds.php?nr=<?= $key?>">Atsiimti lėšas</a>
                <div>Sąskaitos likutis: <?= $user['balance'] ?> €</div>
                <input type="hidden" name="accountIndex" value="<?= $key ?>">
                <button class="account_card_button"type="submit">Uždaryti sąskaitą</button>
            </form>
        </div>
        <?php endif ?>
        <?php endforeach ?>
        <?php endif ?>
    </ul>
    </div>
</body>

<script> const url = 'http://localhost/assignments/nd8-bank/accounts.php'; </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="app.js"></script>
</html>