<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite,
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su
RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

<?php

if(!isset($_GET['color'])){
    $color = 'black';
    echo '<body style = "background-color:' . $color . '">';
}
else{
    $color = $_GET['color'];
    echo '<body style = "background-color:' . $color . '">';
}
?>

