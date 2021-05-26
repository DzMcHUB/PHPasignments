<!-- Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides.
Rezultatą atspausdinti. -->

<?php

$filmName = '“An American in Paris”';

echo "$filmName<br>";
echo 'Raidžių a skaičius - ' . substr_count($filmName, 'A') + substr_count($filmName, 'a');