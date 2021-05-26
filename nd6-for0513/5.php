<!-- Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77.
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją. -->

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

$randNumArray = []; 
foreach(range(1,100) as $val){
    $randNumArray[] = rand(33,77);
}
_d($randNumArray);

usort($randNumArray, function($a, $b){

    return findDivisorAmount($b) <=> findDivisorAmount($a);
});

_d($randNumArray);