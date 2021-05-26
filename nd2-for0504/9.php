<!-- Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių
trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu
“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”. -->

<?php

$filmName = '“Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood”';
$allWordsInFilmName = str_word_count($filmName, 1);
// print_r($allWordsInFilmName);

$shortWordCount = 0;
foreach ($allWordsInFilmName as $word){
    if (strlen($word) <= 5){
        $shortWordCount++;
    }
}
echo $shortWordCount;


$filmName = '“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”';
$allWordsInFilmName = str_word_count($filmName, 1,'ĄČĘĖĮŠŲŪŽąčęėįšųūž');

$shortWordCount = 0;
foreach ($allWordsInFilmName as $word){
    if (mb_strlen($word) <= 5){
        $shortWordCount++;
    }
}
echo "<br>$shortWordCount";
