<!-- Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. -->
<?php

$possValuesArray = ['A','B','C','D'];
$letterArray = [];

foreach(range(1,200) as $value){
    $randomLetterIndex = array_rand($possValuesArray,1);
    array_push($letterArray, $possValuesArray[$randomLetterIndex]);
}

sort($letterArray);

foreach($letterArray as $value){
    echo $value . ' ';
}