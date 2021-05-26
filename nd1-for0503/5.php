<!-- Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). -->

<?php

$var1 = rand(0,2);
$var2 = rand(0,2);
$var3 = rand(0,2);
$var4 = rand(0,2);

$zerosCount = 0;
$onesCount = 0;
$twosCount = 0;

if ($var1 == 0){
    $zerosCount++;
}
if ($var1 == 1){
    $onesCount++;
}
if($var1 == 2){
    $twosCount++;
}
if ($var2 == 0){
    $zerosCount++;
}
if ($var2 == 1){
    $onesCount++;
}
if($var2 == 2){
    $twosCount++;
}
if ($var3 == 0){
    $zerosCount++;
}
if ($var3 == 1){
    $onesCount++;
}
if($var3 == 2){
    $twosCount++;
}
if ($var4 == 0){
    $zerosCount++;
}
if ($var4 == 1){
    $onesCount++;
}
if($var4 == 2){
    $twosCount++;
}

echo "Tarp kintamųjų nulių yra - $zerosCount, vienetų - $onesCount, dvejetų - $twosCount.";