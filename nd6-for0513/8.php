<!-- Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.
Skaičiuoti reikia visuose masyvuose ir submasyvuose. -->

<?php

function createArray($reset = FALSE) {
    static $cycleCount = 0;
    static $randLastCycle = 0;
    if($reset){
        $cycleCount = 0;
    }
    if(!$cycleCount){
        $randLastCycle = rand(10, 30);
    }
    $cycleCount++;
    if($cycleCount <= $randLastCycle){
        
        $randArrayEnd = rand(10, 20);
        foreach(range(1, $randArrayEnd) as $ind => $val){
            if(($cycleCount == $randLastCycle) && ($ind == $randArrayEnd - 1)){
                $randNumArray[] = 0;
            }
            elseif ($ind == $randArrayEnd - 1){
                $randNumArray[] = createArray();
            }
            else{
                $randNumArray[] = rand(0, 10);
            }
        }
        return $randNumArray;
    }
}

function arrayCountSum (array $array) : int {
    static $arraySum = 0;
    foreach ($array as $val){
        if(is_array($val)){
            arrayCountSum($val);
        }
        else{
            $arraySum += $val;
        }
    }
    return $arraySum;
}


echo arrayCountSum(createArray());
