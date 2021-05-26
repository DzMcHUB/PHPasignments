<!-- Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->


<?php

$var1 = rand(0,4);
$var2 = rand(0,4);
// echo "$var1,$var2 <br>";

if ($var1 == 0 || $var2 == 0){
    echo 'Dalyba iš nulio negalima';
}
else if ($var1 > $var2){
    $divisionRezult = $var1 / $var2;
    echo round($divisionRezult, 2);
}
else {
    $divisionRezult = $var2 / $var1;
    echo round($divisionRezult, 2);
}
