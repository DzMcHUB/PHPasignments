<!-- Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius
nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.  -->

<pre>
<?php

$userRowArray = [];
do{
    $randUserID = rand(1,1000000);
    $randPlaceInRow = rand(0,100);
    foreach ($userRowArray as $index => $value){
        if($userRowArray[$index]['user_id'] == $randUserID || $userRowArray[$index]['place_in_row'] == $randPlaceInRow ){
            continue 2;
        }
    }
    $userRowArray[] = ['user_id' => $randUserID, 'place_in_row' => $randPlaceInRow];
} while(count($userRowArray) < 30);

_d($userRowArray);
print_r($userRowArray);
?>
</pre>