<!-- Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma.
Penktas trečio ir ketvirto suma ir t.t. -->

<?php

foreach(range(1,10) as $index => $value){
    if ($value <= 2){
        $tenNumArray[$index] = rand(5,25);
    }
    else{
        $tenNumArray[$index] = $tenNumArray[$index - 2] + $tenNumArray[$index - 1];
    }
}

print_r($tenNumArray);
