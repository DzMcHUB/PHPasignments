<!-- Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos
(išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių; -->

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

echo findDivisorAmount(38);