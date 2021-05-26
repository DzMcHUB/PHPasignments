<!-- Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais
 ir suskaičiuokite kiek tarp jų yra didesnių už 150.
 Skaičiai didesni nei 275 turi būti raudonos spalvos. -->

<?php

$countHigherThan150 = 0;
for ($i = 1; $i <= 300; $i++){
    $randNumber = rand(0,300);
    
    if ($randNumber > 150){
        $countHigherThan150++;
    }

    if ($randNumber > 275){
        echo "<span style=\"color:red;\">$randNumber</span>\n";
        continue;
    }
    echo  "$randNumber\n";
}
echo "<div>Skaičiai didesni nei 150 - $countHigherThan150</div>";