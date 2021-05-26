<!-- Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
Surasti ir atspausdinti epizodo numerį. -->

<?php

$filmName = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $filmName;

preg_match_all('!\d+!',$filmName,$numbersInFilmName);
$episodeNumber = $numbersInFilmName[0][0];
echo "<br>Episodo numeris - $episodeNumber";

for ($i = 1; $i <= 9; $i++){
    if (strstr($filmName, "$i")){
        $episodeNumber = $i;
    }
}
echo "<br>Episodo numeris - $episodeNumber";