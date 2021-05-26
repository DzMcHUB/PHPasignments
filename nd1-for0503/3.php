<!-- Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. -->

<?php

$var1 = rand(0,25);
$var2 = rand(0,25);
$var3 = rand(0,25);
// echo "$var1,$var2,$var3 <br>";

if ($var1 == $var2 || $var1 == $var3){
    echo $var1;
}else if ($var2 == $var3){
    echo $var2;
}else if (($var1 > $var2 && $var1 < $var3) || ($var1 > $var3 && $var1 < $var2) ){
    echo $var1;
}else if (($var2 > $var1 && $var2 < $var3) || ($var2 > $var3 && $var2 < $var1)){
    echo $var2;
}else {
    echo $var3;
}