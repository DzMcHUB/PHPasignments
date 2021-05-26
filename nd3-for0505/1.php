<!-- Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;  -->

<?php
echo 'A dalis<br>';
for ($i = 1; $i <= 400; $i++){
    echo "<div style=\"display:inline-block;\">*</div>";
}
echo '<br>B dalis<br>';
for ($i = 1; $i <= 400; $i++){
    echo '*';
    if ($i % 50 == 0){
        echo '<br>';
    }
}
// linebreak, max-width