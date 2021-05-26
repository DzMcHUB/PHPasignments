<!-- Naudodamiesi 1 uždavinio masyvu:
a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
b)Raskite didžiausią masyvo reikšmę;
c)Suskaičiuokite visų reikšmių sumą;
d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
g)Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
h)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą; -->

<?php

$randArray = [];
foreach (range(1,30) as $val){
    $randArray[] = rand(5,25); 
}
foreach($randArray as $val){
    echo $val . ' ';
}
echo '<br>';
echo '<br>A dalis<br>';

$countNumOver10 = 0;
foreach ($randArray as $val){
    if ($val > 10){
        $countNumOver10++;
    }
}
echo "Reikšmių didesnių nei 10 yra $countNumOver10";
// ====================================================
echo '<br><br>B dalis<br>';

$maxValue = NULL;
foreach($randArray as $val){
    if($val > $maxValue){
        $maxValue = $val;
    }
}
echo "Didžiausia reikšmė masyve - $maxValue";
// =====================================================
echo '<br><br>C dalis<br>';

$arrayValueSum = 0;
foreach($randArray as $val){
    $arrayValueSum += $val;
}
echo "Masyvo reikšmių suma - $arrayValueSum";
// ======================================================
echo '<br><br>D dalis<br>';

$newRandArray = [];
foreach($randArray as $index => $val){
    $newRandArray[] = $val - $index;
}
foreach($newRandArray as $val){
    echo $val . ' ';
}
// ======================================================
echo '<br><br>E dalis<br>';
foreach(range(1,10) as $val){
    array_push($randArray, rand(5,25));
}
foreach($randArray as $val){
    echo $val . ' ';
}
// ======================================================
echo '<br><br>F dalis<br>';
$evenNumArray = [];
$unevenNumArray = [];
foreach($randArray as $index => $val){
    if (!($index % 2)){
        array_push($evenNumArray, $val);  
    }
    else {
        array_push($unevenNumArray, $val);
    }
}
foreach($evenNumArray as $val){
    echo $val . ' ';
}
echo '<br>';
foreach($unevenNumArray as $val){
    echo $val . ' ';
}
// ======================================================
echo '<br><br>G dalis<br>';

foreach($randArray as $index => &$val){
    if ((!($index % 2)) && $val > 15){
        $val = 0;
    }
}
unset($val);
foreach($randArray as $val){
    echo $val . ' ';
}
// ======================================================
echo '<br><br>H dalis<br>';

$moreThan10index = [];
foreach($randArray as $index => $val){
    if ($val > 10){
        $moreThan10index[] = $index;
    }
}
echo "Pirmos reikšmės didesnės nei 10 indeksas - $moreThan10index[0]";
// ======================================================
echo '<br><br>I dalis<br>';

foreach($randArray as $index => $val){
    if (!($index % 2)){
        unset($randArray[$index]);
    }
}
foreach($randArray as $val){
    echo $val . ' ';
}