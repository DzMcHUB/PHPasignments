<!-- Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais.
Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu,
palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs).
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio. -->

<?php

$stringRandNum = '';
$stringPrimeNum = '';
$numCount = 0;
do {
    $randNum = rand(1,200) . ' ';
    if (preg_match("/$randNum/",$stringRandNum)){
        continue;
    }
    $stringRandNum .= $randNum;
    $numCount++;
    
    if ($randNum == 1){
        $stringPrimeNum .= $randNum;
    }
    else {
        $primeCheck = TRUE;
        foreach (range(2, $randNum - 1) as $value){
            if (!($randNum % $value)){
                $primeCheck = FALSE;
            }
        }
        if ($primeCheck){
            $stringPrimeNum .= $randNum;
        }
    }    
} while ($numCount < 50);

$stringPrimeNum = explode(' ', $stringPrimeNum);
sort($stringPrimeNum);
$stringPrimeNum = implode(' ', $stringPrimeNum);

echo '50 atsitiktinių nesikartojančių skaičių ' . $stringRandNum;
echo '<br>Pirminiai skaičiai ' . $stringPrimeNum;