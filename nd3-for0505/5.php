<!-- Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines. -->

<style>
.stars {
    line-height:12px;
    width: 12px;
    display:inline-block;
}
.red{
    color:red;
}
</style>

<?php

$firstDiagonalLineIndex = 1;
$secondDiagonalLineIndex = 100;

for ($i = 1; $i <= 10000; $i++){
    if ($i == $firstDiagonalLineIndex){
        echo '<div class="stars red">*</div>';
        $firstDiagonalLineIndex = $firstDiagonalLineIndex + 101;
    }
    elseif ($i == $secondDiagonalLineIndex){
        echo '<div class="stars red">*</div>';
        $secondDiagonalLineIndex = $secondDiagonalLineIndex + 99;
    }
    else echo '<div class="stars">*</div>';
    
    if ($i % 100 == 0){
        echo '<br>';
    }
}