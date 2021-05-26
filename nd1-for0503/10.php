<!-- Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand().
Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko.
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. -->

<?php 

$hours = rand(0,23);
$minutes = rand(0,59);
$seconds = rand(0,59);

echo "$hours:$minutes:$seconds</br>";

$addSeconds = rand(0,300);
echo "added time - $addSeconds seconds</br>";
$seconds = $seconds + $addSeconds;

if ($seconds >= 60){
    $addMinutes = floor($seconds/60);
    $seconds = $seconds - $addMinutes*60;
    $minutes = $minutes + $addMinutes;
}

if ($minutes >= 60){
    $addHours = floor($minutes/60);
    $minutes = $minutes - $addHours*60;
    $hours = $hours + $addHours;
}

if ($hours >= 24){
    $resetHours = floor($hours/24);
    $hours = $hours - $resetHours*24;
}

echo "$hours:$minutes:$seconds";
