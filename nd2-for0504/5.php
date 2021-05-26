<!-- Sukurti kintamąjį su stringu: “An American in Paris”.
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. -->

<?php

$filmName = '“An American in Paris”';

echo str_replace(['A', 'a'], '*', $filmName);
// str_ireplace to not have to differenciate between lower and upper case.