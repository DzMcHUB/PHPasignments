<!-- Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių,
 o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo) -->

<?php

$film1Name = '“Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood”';
$film2Name = '“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”';

$allFilm1NameWords = str_word_count($film1Name, 1);
$allFilm2NameWords = str_word_count($film2Name, 1, 'ĄČĘĖĮŠŲŪŽąčęėįšųūž');

$allAvailableWords = array_merge($allFilm1NameWords,$allFilm2NameWords);

$randomSentence ='';
for ($i = 1; $i <= 9; $i++){
    $randomWordIndex = rand(0,sizeof($allAvailableWords)-1);
    $randomSentence = $randomSentence . $allAvailableWords[$randomWordIndex] . ' ';
    array_splice($allAvailableWords,$randomWordIndex,1);
}
$randomSentence = $randomSentence . $allAvailableWords[rand(0,sizeof($allAvailableWords)-1)] . '.';

echo $randomSentence;