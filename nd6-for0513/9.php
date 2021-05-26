<!-- Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius,
prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33.
Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą.
Kartokite, kol sąlyga nereikalaus pridėti elemento.  -->

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

foreach(range(1,3) as $val){
    $newArray[] = rand(1, 33);
}
_d($newArray);

function primeCheck ($array) {

    if (!findDivisorAmount($array[count($array)-1]) || !findDivisorAmount($array[count($array)-2]) || !findDivisorAmount($array[count($array)-3])){
        $array[] = rand(1,33);
        return primeCheck($array);
    }
    else{
        return $array;
    }
}

_d(primeCheck($newArray));