<!-- Naudodamiesi 1 uždavinio masyvu:
a)Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b)Raskite didžiausio elemento reikšmę;
c)Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
 (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d)Visus masyvus “pailginkite” iki 7 elementų
e)Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite
 kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo,
 turinčio indeksą 0 dideliame masyve, visų elementų sumai  -->
 <pre>
<?php

foreach(range(1,10) as $index => $value){
    foreach(range(1,5) as $value1){
       $randNumArray[$index][] = rand(5,25);
    }
}
_d($randNumArray);
print_r($randNumArray);
echo '<br> A dalis <br>';

$countHigherThan10 = 0;
foreach($randNumArray as $value1){
    foreach($value1 as $value2){
        if($value2 > 10){
            $countHigherThan10++;
        }
    }
}
echo "Masyve skaičių didesnių nei 10 yra $countHigherThan10";
// ======================================================================================
echo '<br><br> B dalis <br>';

$maxValue = NULL;
foreach($randNumArray as $value1){
    foreach($value1 as $value2){
        if($value2 > $maxValue){
            $maxValue = $value2;
        }
    }
}
echo "Didžiausia reikšmė masyve yra $maxValue";
// =======================================================================================
echo '<br><br> C dalis <br>';
$counter = [];
$sumsOfIndex = [0, 0, 0, 0, 0];
foreach($randNumArray as $value1){
    foreach($value1 as $index2 => $value2){
        $counter[$index2] = ($counter[$index2] ?? 0) + $value2;
        foreach($sumsOfIndex as $index3 => $value3){
            if($index2 == $index3){
                $sumsOfIndex[$index3] += $value2;
            }
        }
    }
}

print_r($counter);
print_r($sumsOfIndex);
// =======================================================================================
echo '<br><br> D dalis <br>';

foreach($randNumArray as $index1 => $value1){
    foreach($value1 as $index2 => $value2){
        if($index2 == count($value1) - 1){
            foreach(range(1,2) as $value){
                $randNumArray[$index1][$index2 + $value] = rand(5,25);
            }
        }
    }
}

// YRA LENGVIAU BUDAS SU 2 FOREACH
_d($randNumArray);
echo 'console --------->';
// =======================================================================================
echo '<br><br> E dalis <br>';

foreach($randNumArray as $index1 => $value1){
    $newSumArray[$index1] = 0;
    foreach($value1 as $index2 => $value2){
        $newSumArray[$index1] += $value2; 
    }
}
print_r($newSumArray);
?>
</pre>