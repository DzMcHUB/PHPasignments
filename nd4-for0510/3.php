<!-- Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200.
Suskaičiuokite kiek yra kiekvienos raidės. -->

<?php

$possValuesArray = ['A','B','C','D'];
$letterArray = [];
$letterCountArray = ['A' => 0, 'B' => 0, 'C' => 0, 'D' => 0];

foreach(range(1,200) as $value){
    $randomLetterIndex = array_rand($possValuesArray,1);
    array_push($letterArray, $possValuesArray[$randomLetterIndex]);

    foreach ($letterCountArray as $index => &$val){
        if ($index == $possValuesArray[$randomLetterIndex]){
            $val++;
        }
    }
    unset ($val);
}

// // Destytojo var:
// $counter = [];
// foreach($letterArray as $value){
//     // Jei yra indexas su $value +1, jei neegzistuoja sukuria ir +1
//     $counter[$value] = ($counter[$value] ?? 0) + 1;
// }

foreach($letterArray as $value){
    echo $value . ' ';
}
echo '<br>';
foreach($letterCountArray as $index => $value){
    echo $index . ' - ' . $value . '<br>';
}
