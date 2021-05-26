<!-- Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.  -->

<?php

$var1 = rand(-10,10);
$var2 = rand(-10,10);
$var3 = rand(-10,10);

if ($var1 > 0){
    echo "<span style=\"color:green;\">$var1 <span>";
}
if ($var1 < 0){
    echo "<span style=\"color:blue;\">$var1 <span>";
}
if ($var1 == 0){
    echo "<span style=\"color:red;\">$var1 <span>";
}
if ($var2 > 0){
    echo "<span style=\"color:green;\">$var2 <span>";
}
if ($var2 < 0){
    echo "<span style=\"color:blue;\">$var2 <span>";
}
if ($var2 == 0){
    echo "<span style=\"color:red;\">$var2 <span>";
}
if ($var3 > 0){
    echo "<span style=\"color:green;\">$var3 <span>";
}
if ($var3 < 0){
    echo "<span style=\"color:blue;\">$var3 <span>";
}
if ($var3 == 0){
    echo "<span style=\"color:red;\">$var3 <span>";
}