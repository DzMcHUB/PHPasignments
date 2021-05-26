<!-- Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas
su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z.
Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm). -->
<pre>
<?php

foreach(range(1, 10) as $index => $value){
    foreach(range(1, rand(2, 20)) as $value1){
        $abcArray = explode(' ','A B C D E F G H I J K L M O P Q R S T U V W Y Z');
        $randLetterArray[$index][] = $abcArray[rand(0, count($abcArray)-1)];
    }
    sort($randLetterArray[$index], SORT_STRING);
}
echo "<script>console.log(JSON.parse('" . json_encode($randLetterArray) . "'));</script>";
print_r($randLetterArray);
?>
</pre>