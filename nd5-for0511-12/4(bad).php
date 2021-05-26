<!-- Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip,
kad elementai kurių masyvai trumpiausi eitų pradžioje.
Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje. -->

<pre>
<?php

foreach(range(1, 10) as $index => $value){
    foreach(range(1, rand(2, 20)) as $value1){
        $abcArray = explode(' ','A B C D E F G H I J K L M O P Q R S T U V W Y Z');
        $randLetterArray[$index][] = $abcArray[rand(0, count($abcArray)-1)];
    }
    sort($randLetterArray[$index], SORT_STRING);
}
_d($randLetterArray);

// foreach($randLetterArray as $index => $value){
//     foreach($randLetterArray as $i => $value1){
//         if(count($randLetterArray[$index]) > count($randLetterArray[$i])){
//             $temp = $randLetterArray[$i];
//             $randLetterArray[$i] = $randLetterArray[$index];
//             $randLetterArray[$index] = $temp;
//         }
//         if(in_array('K',$randLetterArray[$index])){
//             $temp = $randLetterArray[$i];
//             $randLetterArray[$i] = $randLetterArray[$index];
//             $randLetterArray[$index] = $temp;
//         }
//         if(count($randLetterArray[$index]) < count($randLetterArray[$i]) && !in_array('K',$randLetterArray[$index]) && !in_array('K',$randLetterArray[$i])){
//             $temp = $randLetterArray[$i];
//             $randLetterArray[$i] = $randLetterArray[$index];
//             $randLetterArray[$index] = $temp;
//         }
//     }
// }
// _d($randLetterArray);
usort($randLetterArray, function($a, $b){
    // Jei tik vienas turi K raide nesortinam pagal ilgi
    if ((int)in_array('K', $b) + (int)in_array('K', $a) === 1){
        return (int)in_array('K', $b) <=> (int)in_array('K', $a);
    }
    else{
        return count($a) <=> count($b);
    }
});

_d($randLetterArray);
print_r($randLetterArray);
?>
</pre>