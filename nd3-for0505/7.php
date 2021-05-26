<!-- Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25.
Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”.
Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus.
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. -->

<?php

$petrasPoints = 0;
$kazysPoints = 0;

do{
    $petrasPoints = $petrasPoints + rand(10,20);
    if ($petrasPoints >= 222){
        continue;
    }
    $kazysPoints = $kazysPoints + rand(5,25);
} while ($petrasPoints <222 && $kazysPoints < 222);

echo "Petras surinko $petrasPoints taškus, Kazys surinko $kazysPoints.";

if ($petrasPoints > $kazysPoints){
    echo ' Partiją laimėjo: Petras';
}
elseif ($kazysPoints > $petrasPoints){
    echo ' Partiją laimėjo: Kazys';
}