<!-- Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo. -->
<?php

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);

$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];

for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}

// echo '<h4>Masyvas:</h4>';
// echo '<pre>';
// print_r($c);
// echo '</pre>';
// echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';
echo '<h4>Masyvas:</h4>';

echo '<pre>';

print_r($c);

echo '</pre>';

print_r(array_count_values($c));



$sum = 0;

foreach($c as $value) {

    $sum += $value;

}



$maxNumber = max($c); //surandamos max ir min reiksmes

$minNumber = min($c);

$numberCount = (float)$long / 2; // vienodas sk. kiekis skaiciuojant suma

$sumIfEvenCount = $maxNumber * $numberCount + $minNumber * $numberCount;

echo "<br>Reali suma: $sum, suma jei vienodas skaiciu kiekis: $sumIfEvenCount.";

$differenceBetweenSums = $sum - $sumIfEvenCount; // skirtumas tarp sumu

$differenceBetweenNumbers = $maxNumber - $minNumber; // skirtumas tarp sk.

$differenceOfNumbers = $differenceBetweenSums / $differenceBetweenNumbers; // jei daugiau uz 0, tai max reiksmiu daugiau, maziau tai minimaliu daugiau

$maxNumberCount = $numberCount + $differenceOfNumbers;

$minNumberCount = $numberCount - $differenceOfNumbers;



echo "<br><br><h3>Skaičius $maxNumber yra pakartotas - $maxNumberCount kartų, o skaičius $minNumber - $minNumberCount kartų.</h3><br><br>";