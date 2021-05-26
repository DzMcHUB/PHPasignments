<?php
require 'bootstrap.php';
if(!isset($_SESSION['logged']) || $_SESSION['logged'] == 0){
    header('Location: '.URL.'login.php');
    die;
}

$controlDigits = '01';
$bankCode = '00000';
$randAccNo = 'LT' . $controlDigits . $bankCode . sprintf("%011d",rand(0,99999999999));

if('POST' == $_SERVER['REQUEST_METHOD']){
   $accounts = json_decode(file_get_contents(__DIR__ . '/accounts.json'), 1);

   require 'inputDataValidation.php';

   $account['balance'] = 0;

   if (!isset($accounts['lastID'])){
       $accounts['lastID'] = 0;
    }

   if(!isset($inputErrors)){
       $newID = $accounts['lastID'] + 1;
       $accounts["$newID"] = $account;
       $accounts['lastID'] = $newID;
       $_SESSION['msg'] = 'Sąskaita sukurta';
       file_put_contents(__DIR__ . '/accounts.json', json_encode($accounts));
   }
   else{
       foreach($inputErrors as $val){
           $_SESSION['error'] .= '<br>' .$val. '<br>';
       }
   }
    
    header('Location:'.URL.'newaccount.php');
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja sąskaita</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class= "container">
    <?php include __DIR__ . '/navigation.php' ?>
    <?php include __DIR__ . '/alert.php' ?>
    <h1>Naujos sąskaitos informacija:</h1>
    <form class="input_form" action="<?= URL ?>newaccount.php" method="post">
        <label for="name">Vardas: </label>
        <input type="name" name="name">
        <label for="surname">Pavardė: </label>
        <input type="surname" name="surname">
        <label for="accountNumber">Sąskaitos numeris: </label>
        <input type="hidden" name="accountNumber" value="<?= $randAccNo ?>">
        <input type="accountNumber" value="<?= chunk_split($randAccNo, 4, ' ') ?>" readonly>
        <label for="socialNumber">Asmens kodas: </label>
        <input type="socialNumber" name="socialNumber">
        <div>
        <button type="submit">Kurti sąskaitą</button>
        </div>
        
    </form>
</div>
</body>
</html>