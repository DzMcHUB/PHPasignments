<!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis).
Atspausdinti trumpesnį stringą. -->

<?php

$name = 'Hugh';
$surname = 'Jackman';

if (strlen($name) < strlen($surname)){
    echo $name;
}
elseif (strlen($surname) < strlen($name)){
    echo $surname;
}
elseif (strlen($surname) == strlen($name)) {
    echo "Vardas ir pavardė vienodo ilgio - $name $surname";
}