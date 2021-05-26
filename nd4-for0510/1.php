<!-- Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29),
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25. -->

<?php

$randArray = [];
foreach (range(1,30) as $val){
    $randArray[] = rand(5,25); 
}
foreach($randArray as $val){
    echo $val . ' ';
}
