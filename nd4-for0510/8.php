<!-- Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. -->

<?php

$randNumArray1 = [];
$randNumArray2 = [];

do {
    if (count($randNumArray1) < 100){
        array_push($randNumArray1, rand(100,999));
        $randNumArray1 = array_unique($randNumArray1);
    }
    if (count($randNumArray2) < 100){
        array_push($randNumArray2, rand(100,999));
        $randNumArray2 = array_unique($randNumArray2);
    }
} while (count($randNumArray1) < 100 || count($randNumArray2) < 100);

$isInBothArrays = [];

foreach($randNumArray1 as $index => $value1){
    foreach($randNumArray2 as $value2){
        if ($value1 == $value2){
            array_push($isInBothArrays, $value1);
        }
    }
}

foreach($randNumArray1 as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($randNumArray2 as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($isInBothArrays as $value){
    echo $value . ' ';
}
