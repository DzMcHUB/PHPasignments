<!-- Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10).
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  -->

<?php

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

if ($a < $b + $c && $b < $a + $c && $c < $a + $b){
    echo "Trikampį iš a = $a, b = $b, c = $c kraštinių sudaryti galima.";
}else {
    echo "Trikampio sudaryti negalima.";
}