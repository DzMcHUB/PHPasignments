<!-- Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. -->
<pre>
<?php

foreach(range(1,10) as $index => $value){
    foreach(range(1,5) as $value1){
        $newArray[$index][] = rand(5,25);
    }
}
_d($newArray);
// _dc($newArray);
// echo "<script>console.log(JSON.parse('" . json_encode($newArray) . "'));</script>";
print_r($newArray);
?>
</pre>