<!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus).
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->

<?php

$name = 'Džiugas';
$surname = 'Mačiūnas';
$yearOfBirth = 1992;
$currentYear = 2021;
$age = $currentYear - $yearOfBirth;

echo "Aš esu $name $surname. Man yra $age metai(ų).";