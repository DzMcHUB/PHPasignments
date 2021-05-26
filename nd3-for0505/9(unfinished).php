<!-- Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu \n suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu \n suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse) -->

<?php 

$time = microtime($as_float = true);
for ($i = 1; $i <= 1000000; $i++){
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
    if ($i == 1000000){
       $operationLength1 = microtime($as_float = true) - $time;
    }
}
echo "Kodą su dvigubomis kabutėmis įvydyti užtrunka - $operationLength1<br>";

$time = microtime($as_float = true);
for ($i = 1; $i <= 1000000; $i++){
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
    if ($i == 1000000){
       $operationLength2 = microtime($as_float = true) - $time;
    }
}
echo "Kodą su viengubomis kabutėmis įvydyti užtrunka - $operationLength2<br>";

echo '1000000 operacijų su dvigubomis kabutėmis vykdomos ' . $operationLength1 - $operationLength2 . ' sekundės lėčiau';
