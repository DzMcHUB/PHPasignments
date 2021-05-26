<!-- Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas),
kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė
būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). -->

<?php

for ($i = 1; $i <= 21; $i++){
    echo '<div style="text-align:center; font-size: 40px;">';
    if ($i <= 11){
        $starCount = $i;
    }    
    else {
        $starCount = $i - 2 * ($i - 11);
    }
    while ($starCount != 0) {
        echo '<span style="color:rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        $starCount--;
    }
    echo '</div>';    
}

// echo str_repeat('&nbsp;', 1); tarpai

