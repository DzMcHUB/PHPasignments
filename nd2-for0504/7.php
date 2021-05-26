<!-- Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti.
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. -->

<?php

$filmName = '“An American in Paris”';
$filmNameNoVowels = str_replace(['A','E','I','Y','O','U','a','e','i','y','o','u'], '', $filmName);
echo "$filmName ištrynus balses - $filmNameNoVowels";

$filmName = '“Breakfast at Tiffany\'s”';
$filmNameNoVowels = str_replace(['A','E','I','Y','O','U','a','e','i','y','o','u'], '', $filmName);
echo "<br>$filmName ištrynus balses - $filmNameNoVowels";

$filmName = '“It\'s a Wonderful Life”';
$filmNameNoVowels = str_replace(['A','E','I','Y','O','U','a','e','i','y','o','u'], '', $filmName);
echo "<br>$filmName ištrynus balses - $filmNameNoVowels";