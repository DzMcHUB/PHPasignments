<!-- Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname.
Elementus užpildykite stringais iš atsitiktinai sugeneruotų
 lotyniškų raidžių, kurių ilgiai nuo 5 iki 15. -->

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

foreach ($userRowArray as $index => $value){
    foreach(range(0, count($userRowArray) - 1) as $index1 => $value1){
        if ($userRowArray[$index] > $userRowArray[$index1]){
            $temp = $userRowArray[$index1];
            $userRowArray[$index1] = $userRowArray[$index];
            $userRowArray[$index] = $temp;
        }
    }
}

foreach ($userRowArray as $index => $value){
    foreach(range(0, count($userRowArray) - 1) as $index1 => $value1){
        if ($userRowArray[$index]['place_in_row'] < $userRowArray[$index1]['place_in_row']){
            $temp = $userRowArray[$index1];
            $userRowArray[$index1] = $userRowArray[$index];
            $userRowArray[$index] = $temp;
        }
    }
}

$letters = explode(' ', 'a b c d e f g h i j k l m n o p r s t u v w x y z');
foreach($userRowArray as $index => $value){
    $name = '';
    $surname = '';
    foreach(range(4, rand(5,15)) as $value1){
        $name .= $letters[array_rand($letters, 1)];
    }
    foreach(range(4, rand(5,15)) as $value1){
        $surname .= $letters[array_rand($letters, 1)];
    }
    $userRowArray[$index]['name'] = ucfirst($name);
    $userRowArray[$index]['surname'] = ucfirst($surname);
}

echo "<script>console.log(JSON.parse('" . json_encode($userRowArray) . "'));</script>";
print_r($userRowArray);
?>
</pre>