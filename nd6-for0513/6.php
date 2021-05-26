<!-- Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777.
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius. -->

<?php

function findDivisorAmount (int $number) :int {
    $countOfDivisors = 0;
    for ($i = 2; $i <= round($number/2); $i++){
        if (!($number % $i)){
            $countOfDivisors++;
        }
    }
    return $countOfDivisors;
}
_dc(createArray());

$randNumArray = []; 
foreach(range(1,100) as $val){
    $randNumArray[] = rand(333,777);
}
_d($randNumArray);
echo count($randNumArray) . '<br>';

foreach ($randNumArray as $index => $val){
    if (!findDivisorAmount($val)){
        unset($randNumArray[$index]);
    }
}
echo count($randNumArray) . '<br>';
_d($randNumArray);