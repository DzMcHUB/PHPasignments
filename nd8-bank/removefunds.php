<?php
require 'bootstrap.php';
if(!isset($_SESSION['logged']) || $_SESSION['logged'] == 0){
    header('Location: '.URL.'login.php');
    die;
}

$accounts = json_decode(file_get_contents(__DIR__ . '/accounts.json'), 1);

if('GET' == $_SERVER['REQUEST_METHOD']){
    if(!isset($_GET['nr'])){
        header('Location: '.URL.'accounts.php');
        die;
    }
}

// saskaita tuscia pries atemima scenarijus
if('GET' == $_SERVER['REQUEST_METHOD']){
    foreach ($accounts as $index => $user){
        if ($_GET['nr'] == $index){
            if($accounts[$index]['balance'] == 0){
                $_SESSION['error'] = 'Sąskata tuščia';
                header('Location: '.URL.'accounts.php');
                die;
            }
        }
    }
}

// atemimo scenarijus
if('POST' == $_SERVER['REQUEST_METHOD']){
    if(!isset($_POST['removeFunds']) || $_POST['removeFunds'] < 0){
        $_SESSION['error'] = 'Įrašykite tinkamą sumą';
    }
    elseif($accounts[$_GET['nr']]['balance'] - $_POST['removeFunds'] < 0){
        $_SESSION['error'] = 'Nepakankamas sąskaitos likutis';
    }
    else{
        $accounts[$_GET['nr']]['balance'] -= $_POST['removeFunds'];
        file_put_contents(__DIR__ . '/accounts.json', json_encode($accounts));
        $_SESSION['msg'] = 'Atsiimta '.$_POST['removeFunds']. '€';
    }
    
    header('Location: '.URL.'removefunds.php?nr='.$_GET['nr']);
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atsiimti lėšas</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php include __DIR__ . '/navigation.php' ?>
    <?php include __DIR__ . '/alert.php' ?>
    <?php foreach ($accounts as $index => $user): 
        if ($_GET['nr'] == $index):?>
            <div class = "account_card">
            <form action="<?= URL?>removefunds.php?nr=<?= $_GET['nr'] ?>" method="post">
                <div>Pavardė: <?= $user['surname'] ?></div>
                <div>Vardas: <?= $user['name'] ?></div>
                <div>Asmens kodas: <?= $user['socialNumber'] ?></div>
                <div>Sąskaitos numeris: <?= chunk_split($user['accountNumber'], 4, ' ') ?></div>
                <div>Sąskaitos likutis: <?= $user['balance'] ?> €</div>
                <input type="number" name="removeFunds" step=".01" pattern="^\d*(\.\d{0,2})?$">  
                <button class="account_card_button greenbg" type="submit">Atsiimti sumą</button>
                <a class = "link redbg" href="<?= URL ?>accounts.php">Atšaukti</a>
            </form>
            </div>
        <?php endif ?>
    <?php endforeach ?>
    <?php _d($accounts) ?>


</div>
</body>
</html>