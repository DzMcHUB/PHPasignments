<!-- Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5.
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite.
Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10.
Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai. -->

<pre>
<?php

$numArray = [];
foreach(range(1,10) as $index => $value){
    $randNum = rand(0,5);
    if ($randNum){
        foreach (range(1, $randNum) as $index1 => $value1){
             $numArray[$index][$index1] = rand(0,10);
             
        }
        continue;
    }
    $numArray[] = rand(0, 10);
}

_d($numArray);
print_r($numArray);
?>
</pre>