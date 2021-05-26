<!-- Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius.
Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
a)Iškritus herbui;
b)Tris kartus iškritus herbui;
c)Tris kartus iš eilės iškritus herbui; -->

<?php

$heads = 1;
$tails = 0;
$results = '';

echo 'A dalis<br>';

do{
    $coinFlip = rand(0,1);
    if ($coinFlip == $heads){
        $results = $results . 'S ';
    }
    elseif ($coinFlip == $tails){
        $results = $results . 'H';
    }
} while ($coinFlip != $tails);

echo $results . '<br>';
// =================================================
echo '<br>B dalis<br>';

$results = '';
$tailsCount = 0;

do{
    $coinFlip = rand(0,1);
    if ($coinFlip == $heads){
        $results = $results . 'S ';
    }
    elseif ($coinFlip == $tails){
        $results = $results . 'H ';
        $tailsCount++;
    }
} while ($tailsCount < 3);

echo $results . '<br>';
// ====================================================
echo '<br>C dalis<br>';

$results = '';
$tailsCount = 0;

do{
    $coinFlip = rand(0,1);
    if ($coinFlip == $heads){
        $results = $results . 'S ';
        $tailsCount = 0;
    }
    elseif ($coinFlip == $tails){
        $results = $results . 'H ';
        $tailsCount++;
    }
} while ($tailsCount < 3);

echo $results;
