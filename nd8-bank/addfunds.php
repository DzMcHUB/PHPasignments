<?php
require 'bootstrap.php';

if(!isset($_SESSION['logged']) || $_SESSION['logged'] == 0){
    header('Location: '.URL.'login.php');
    die;
}

if('GET' == $_SERVER['REQUEST_METHOD']){
    if(!isset($_GET['nr'])){
        header('Location: '.URL.'accounts.php');
        die;
    }
}

$accounts = json_decode(file_get_contents(__DIR__ . '/accounts.json'), 1);

if('POST' == $_SERVER['REQUEST_METHOD']){
    if(!isset($_POST['newFunds']) || $_POST['newFunds'] < 0){
        $_SESSION['error'] = 'Įrašykite tinkamą sumą';
    }
    else{
        $accounts[$_GET['nr']]['balance'] += $_POST['newFunds'];
        file_put_contents(__DIR__ . '/accounts.json', json_encode($accounts));
        $_SESSION['msg'] = 'Pridėta '.$_POST['newFunds']. ' €';
    }
    
    header('Location: '.URL.'addfunds.php?nr='.$_GET['nr']);
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti lėšas</title>
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
            <form action="<?= URL?>addfunds.php?nr=<?= $_GET['nr'] ?>" method="post">
                <div>Pavardė: <?= $user['surname'] ?></div>
                <div>Vardas: <?= $user['name'] ?></div>
                <div>Asmens kodas: <?= $user['socialNumber'] ?></div>
                <div>Sąskaitos numeris: <?= chunk_split($user['accountNumber'], 4, ' ') ?></div>
                <div>Sąskaitos likutis: <?= $user['balance'] ?> €</div>
                <input type="number" name="newFunds" step=".01" pattern="^\d*(\.\d{0,2})?$">
                <button class="account_card_button greenbg" type="submit">Pridėti sumą</button>
                <a class = "link redbg" href="<?= URL ?>accounts.php">Atšaukti</a>
            </form>
            
            </div>

        <?php endif ?>
    <?php endforeach ?>
</div>
</body>
</html>