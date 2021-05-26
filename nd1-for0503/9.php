<!-- Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį.
Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite.
Rezultatus apvalinkite iki sveiko skaičiaus. -->

<?php

$var1 = rand(0,100);
$var2 = rand(0,100);
$var3 = rand(0,100);
// echo "$var1, $var2, $var3</br>";

$avarage = ($var1 + $var2 + $var3)/3;
echo 'Aritmetinis vidurikis - ';
echo round($avarage,0);
echo '</br>';

if (($var1 >= 10 && $var1 <= 90)&&($var2 >= 10 && $var2 <= 90)&&($var3 >= 10 && $var3 <= 90)){
    $conditionalAvarage = ($var1 + $var2 + $var3)/3;
}else if (($var1 >= 10 && $var1 <= 90)&&($var2 >= 10 && $var2 <= 90)){
    $conditionalAvarage = ($var1 + $var2)/2;
}else if (($var1 >= 10 && $var1 <= 90)&&($var3 >= 10 && $var3 <= 90)){
    $conditionalAvarage = ($var1 + $var3)/2;
}else if (($var2 >= 10 && $var2 <= 90)&&($var3 >= 10 && $var3 <= 90)){
    $conditionalAvarage = ($var2 + $var3)/2;
}else if ($var1 >= 10 && $var1 <= 90){
    $conditionalAvarage = $var1;
}else if ($var2 >= 10 && $var2 <= 90){
    $conditionalAvarage = $var2;
}else if ($var3 >= 10 && $var3 <= 90){
    $conditionalAvarage = $var3;
}else {
    $conditionalAvarage = 0;
}

if ($conditionalAvarage != 0){
    echo 'Aritmetinis vidurkis reikšmių ne mažesnių už 10 ir ne didesnių nei 90 - ';
    echo round($conditionalAvarage,0);
}else {
    echo 'Reikšmių ne mažesnių nei 10 ir ne didesnių nei 90 nėra';
}
