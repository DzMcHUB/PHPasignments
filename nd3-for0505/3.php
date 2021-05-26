<!-- Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476),
 kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti.
 Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. -->

<?php 

$lastNumber = rand(3000,4000);
$lastPrintedNumber = NULL;

while ($lastPrintedNumber == NULL){
    if ($lastNumber % 77 == 0){
        $lastPrintedNumber = $lastNumber;
        continue;
    }
    $lastNumber--;
}

for ($i = 1; $i <= $lastNumber; $i++){
    if ($i % 77 == 0){
        if ($i == $lastPrintedNumber){
            echo "$i";
            continue;
        }
        echo "$i, ";
    }
}

// $till = rand(3000, 4000);

// $first = true;



// echo '<div style="word-break: break-all;">';

// for($i = 1; $i <= $till; $i++) {

//     if (!($i%77)) {

//         if ($first) {

//             echo $i;

//             $first = false; 

//         }

//         else {

//             echo ','.$i;

//         }

//     }

// }

// echo '</div>';