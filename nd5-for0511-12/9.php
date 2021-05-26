<!-- Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip,
kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas,
to masyvo reikšmių sumos. -->

<pre>
<?php

$numArray = [];
foreach(range(1,10) as $index => $value){
    $randNum = rand(0,5);
    if ($randNum){
        foreach (range(1, $randNum) as $index1 => $value1){
             $numArray[$index][$index1] = rand(0,10);
             
        }
        continue;
    }
    $numArray[] = rand(0, 10);
}
_d($numArray);
print_r($numArray);

$sumOfNumArray = 0;
foreach($numArray as $index => $value){
    if(is_array($numArray[$index])){
        foreach($numArray[$index] as $value1){
            $sumOfNumArray += $value1;
        }
    }
    else{
        $sumOfNumArray += $value;
    }
}

foreach($numArray as $index => $value){
    $sumOfIndex = 0;
    if(is_array($numArray[$index])){
        foreach($numArray[$index] as $index1 => $value1){
            $sumOfIndex += $value1;
        }
    }
    else{
        $sumOfIndex = $value;
    }

    foreach($numArray as $index1 => $value1){
        $sumOfIndex1 = 0;
        if(is_array($numArray[$index1])){
            foreach($numArray[$index1] as $value2){
                $sumOfIndex1 += $value2;
            }
        }
        else {
            $sumOfIndex1 = $value1;
        }
        if($sumOfIndex < $sumOfIndex1){
            $temp = $numArray[$index1];
            $numArray[$index1] = $numArray[$index];
            $numArray[$index] = $temp;
            $temp = $sumOfIndex1;
            $sumOfIndex1 = $sumOfIndex;
            $sumOfIndex = $temp;
        }
    }
}


echo "Masyvo visų reikšmių suma - $sumOfNumArray<br>";
_d($numArray);
print_r($numArray);
?>
</pre>