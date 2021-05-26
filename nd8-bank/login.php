<?php
require 'bootstrap.php';

// scenarijus prisijungiant
if('POST' == $_SERVER['REQUEST_METHOD']){
    _d($_POST);
    $logins = json_decode(file_get_contents(__DIR__ . '/logins.json'), 1);
    if($_POST['name'] == $logins['name'] && $_POST['surname'] == $logins['surname'] && md5($_POST['password']) == $logins['password']){
        $_SESSION['logged'] = 1;

        header('Location: '.URL.'accounts.php');
        die;
    }
    else{
        $_SESSION['error'] = 'Neteisinga prisjungimo informacija';

        header('Location: '.URL.'login.php');
        die;
    }
}
// scenarijus atsijungiant
if(isset($_GET['logged']) && $_GET['logged'] == 0){
    $_SESSION['logged'] = 0;
}
// scenarijus jau prisijungus
if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1){
    header('Location: '.URL.'accounts.php');
    die;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class= "container">
    <?php include __DIR__ . '/navigation.php' ?>
    <?php include __DIR__ . '/alert.php' ?>
    <h1>Įveskite prisijungimo duomenis:</h1>
    <form class="input_form" action="<?= URL ?>login.php" method="post">
        <label for="name">Vardas: </label>
        <input type="name" name="name">
        <label for="surname">Pavardė: </label>
        <input type="surname" name="surname">
        <label for="accountNumber">Slaptažodis: </label>
        <input type="password" name="password">
        <div>
        <button type="submit">Prisijungti</button>
        </div>
        
    </form>
</div>
</body>
</html>