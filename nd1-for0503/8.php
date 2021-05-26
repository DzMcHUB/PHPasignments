<!-- Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida.
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama.
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. -->

<?php

$candles = rand(5,3000);
$candlePrice = 1;

if ($candles * $candlePrice < 1000){
    $priceTotal = $candles * $candlePrice;
}else if ($candles * $candlePrice > 2000){
    $priceTotal = $candles * $candlePrice * 0.96;
}else if ($candles * $candlePrice > 1000){
    $priceTotal = $candles * $candlePrice * 0.97;
}

echo "Perkama $candles žvakės(ių) už $priceTotal Eur.";