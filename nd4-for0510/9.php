<!-- Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės,
o jo reikšmės iš būtų antrojo masyvo. -->

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

foreach($randNumArray1 as $index1 => $value1){
    foreach($randNumArray2 as $index2 => $value2){
        if ($index1 == $index2){
            $weirdlyIndexedArray[$value1] = $value2;
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
print_r($weirdlyIndexedArray);