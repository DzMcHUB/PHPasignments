<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save.
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu
perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju
fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->


<!-- <?php

// if(!isset($_GET['color'])){
//     $color = 'black';
//     echo '<body style = "background-color:' . $color . '">';
// }
// elseif($_GET['color'] == 1){
//     $color = 'red';
//     echo '<body style = "background-color:' . $color . '">';
// }
?> -->


<!-- <a href = 'http://localhost/assignments/nd7-for0518/1.php'>Juodas</a>
<br>
<a href = 'http://localhost/assignments/nd7-for0518/1.php?color=1'>Raudonas</a>
</body> -->
 

<?php
$bgColor = 'black';
if(isset($_GET['color'])){
    $bgColor = 'red';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color:<?= $bgColor ?>;">
    <a href = 'http://localhost/assignments/nd7-for0518/1.php'>Juodas</a>
    <br>
    <a href = 'http://localhost/assignments/nd7-for0518/1.php?color=1'>Raudonas</a>
</body>
</html>