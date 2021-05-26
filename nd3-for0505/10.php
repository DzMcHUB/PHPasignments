<!-- Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija.
Vinies ilgis 8.5cm (pilnai sulenda į lentą).
a)“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
b)“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė
(pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių. -->

<?php

echo 'A dalis<br>';

$hits = 0;
for ($i = 1; $i <= 5; $i++){
    $nailLength = 85;
    do {
        $nailLength = $nailLength - rand(5,20);
        $hits++;
    }while ($nailLength > 0);
}

echo $hits . ' smūgiai<br>';

echo 'B dalis<br>';

$hits = 0;
for ($i = 1; $i <= 5; $i++){
    $nailLength = 85;
    do {
        if (rand(0,1)){
            $nailLength = $nailLength - rand(20,30);
        }
        $hits++;       
    }while ($nailLength > 0);
}
echo $hits . ' smūgiai';
