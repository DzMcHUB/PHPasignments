<!-- Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą.
Sudėkite masyvus, sudėdami atitinkamas reikšmes.
Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. -->

<?php

$possValuesArray = ['A','B','C','D'];
$letterArray = [];
$letterArray2 = [];
$letterArray3 = [];
$mergedArray = [];

foreach(range(1,200) as $value){
    array_push($letterArray, $possValuesArray[array_rand($possValuesArray,1)]);
    array_push($letterArray2, $possValuesArray[array_rand($possValuesArray,1)]);
    array_push($letterArray3, $possValuesArray[array_rand($possValuesArray,1)]);
}

foreach($letterArray as $index => $value){
    $mergedArray[$index] = $letterArray[$index] . $letterArray2[$index] . $letterArray3[$index];
}

foreach($letterArray as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($letterArray2 as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($letterArray3 as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($mergedArray as $value){
    echo $value . ' ';
}
echo '<br><br>';
echo 'Uniklalios kombinacijos - ' . count(array_unique($mergedArray));
