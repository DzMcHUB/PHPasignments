<!-- Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). -->

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

foreach($randNumArray1 as $value){
    echo $value . ' ';
}
echo '<br><br>';
foreach($randNumArray2 as $value){
    echo $value . ' ';
}

