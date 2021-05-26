<!-- Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį,
elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas,
kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas.
Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0; -->

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

_dc(createArray());