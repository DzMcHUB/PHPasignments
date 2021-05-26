<!-- Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999.
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais.
Naudoti ciklų ir masyvų NEGALIMA. -->

<?php

$var1 = rand(1000,9999);
$var2 = rand(1000,9999);
$var3 = rand(1000,9999);
// echo "$var1,$var2,$var3 <br>";

$var1Index = 0;
$var2Index = 0;
$var3Index = 0;

$sortedValues = "Reikšmės mažėjimo tvarka: ";
$currentSortIndex = 2;

if ($var1 >= $var2){
    $var1Index++;
}
if ($var1 >= $var3){
    $var1Index++;
}
if($var2 >=$var1){
    $var2Index++;
}
if($var2 >= $var3){
    $var2Index++;
}
if($var3 >= $var1){
    $var3Index++;
}
if($var3 >= $var2){
    $var3Index++;
}

if ($currentSortIndex == $var1Index){
    $sortedValues = $sortedValues . $var1 . ' ';
    $var1Index = 1000;
    if($currentSortIndex!=$var2Index && $currentSortIndex!=$var3Index){
        $currentSortIndex--;
    }
}
if ($currentSortIndex == $var2Index){
    $sortedValues = $sortedValues . $var2 . ' ';
    $var2Index = 1000;
    if($currentSortIndex!=$var1Index && $currentSortIndex!=$var3Index){
        $currentSortIndex--;
    }
}
if ($currentSortIndex == $var3Index){
    $sortedValues = $sortedValues . $var3 . ' ';
    $var3Index = 1000;
    if($currentSortIndex!=$var2Index && $currentSortIndex!=$var1Index){
        $currentSortIndex--;
    }
}


if ($var1Index != 1000 || $var2Index != 1000 || $var3Index != 1000){
    if ($currentSortIndex == $var1Index){
        $sortedValues = $sortedValues . $var1 . ' ';
        $var1Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var2Index){
        $sortedValues = $sortedValues . $var2 . ' ';
        $var2Index = 1000;
        if($currentSortIndex!=$var1Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var3Index){
        $sortedValues = $sortedValues . $var3 . ' ';
        $var3Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var1Index){
            $currentSortIndex--;
        }
    }
}

if ($var1Index != 1000 || $var2Index != 1000 || $var3Index != 1000){
    if ($currentSortIndex == $var1Index){
        $sortedValues = $sortedValues . $var1 . ' ';
        $var1Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var2Index){
        $sortedValues = $sortedValues . $var2 . ' ';
        $var2Index = 1000;
        if($currentSortIndex!=$var1Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var3Index){
        $sortedValues = $sortedValues . $var3 . ' ';
        $var3Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var1Index){
            $currentSortIndex--;
        }
    }
}

if (($var1Index != $currentSortIndex || $var2Index != $currentSortIndex || $var3Index != $currentSortIndex)
    && ($var1Index < $currentSortIndex || $var2Index < $currentSortIndex || $var3Index < $currentSortIndex)){
    $currentSortIndex--;
    if ($currentSortIndex == $var1Index){
        $sortedValues = $sortedValues . $var1 . ' ';
        $var1Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var2Index){
        $sortedValues = $sortedValues . $var2 . ' ';
        $var2Index = 1000;
        if($currentSortIndex!=$var1Index && $currentSortIndex!=$var3Index){
            $currentSortIndex--;
        }
    }
    if ($currentSortIndex == $var3Index){
        $sortedValues = $sortedValues . $var3 . ' ';
        $var3Index = 1000;
        if($currentSortIndex!=$var2Index && $currentSortIndex!=$var1Index){
            $currentSortIndex--;
        }
    }
}


echo $sortedValues;