<!-- Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o
reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color. -->

<pre>
<?php

$symbols = explode(' ', '# % + * @ 裡');
$square = [];
foreach(range(1,10) as $index => $value){
    foreach(range(1,10) as $index1 => $value1){
        foreach(range(1,10) as $value2){
            $randSymb = $symbols[array_rand($symbols, 1)];
            $randColor = '#' . sprintf('%06d',rand(0,999999));
            $square[$index][$index1]['value'] = $randSymb;
            $square[$index][$index1]['color'] = $randColor;
        }
    }
}

foreach($square as $index => $value){
    foreach($value as $index1 => $value1){
        echo '<div style="
            display:inline-block;
            width: 35px;
            line-height: 35px;
            font-size: 30px;
            color:' . $square[$index][$index1]['color'] . ';
            
            ">' . $square[$index][$index1]['value'] . '</div>';
    }
    echo '<br>';
}


echo "<script>console.log(JSON.parse('" . json_encode($square) . "'));</script>";
?>
</pre>