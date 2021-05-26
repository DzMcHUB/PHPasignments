<!-- Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai. -->

<?php

// $letters = 'aąbcčdeęėfghiįyjklmnoprsštuųūzž';
// $randomString = substr($letters, rand(0,30), 1) . substr($letters, rand(0,30), 1) . substr($letters, rand(0,30), 1);
$letters = 'abcdefghijklmnopqrstuvwyz';
$randomString = substr($letters, rand(0,24), 1) . substr($letters, rand(0,24), 1) . substr($letters, rand(0,24), 1);
echo $randomString;

//not mine:
echo chr(rand(97, 122)) . chr(rand(97, 122)) . chr(rand(97, 122));