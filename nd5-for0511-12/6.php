<!-- Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka.
Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka. -->

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

foreach ($userRowArray as $index => $value){
    foreach(range(0, count($userRowArray) - 1) as $index1 => $value1){
        if ($userRowArray[$index] > $userRowArray[$index1]){
            $temp = $userRowArray[$index1];
            $userRowArray[$index1] = $userRowArray[$index];
            $userRowArray[$index] = $temp;
        }
    }
}
_d($userRowArray);

foreach ($userRowArray as $index => $value){
    foreach(range(0, count($userRowArray) - 1) as $index1 => $value1){
        if ($userRowArray[$index]['place_in_row'] < $userRowArray[$index1]['place_in_row']){
            $temp = $userRowArray[$index1];
            $userRowArray[$index1] = $userRowArray[$index];
            $userRowArray[$index] = $temp;
        }
    }
}
_d($userRowArray);
print_r($userRowArray);
?>
</pre>