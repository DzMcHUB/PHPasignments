<!-- Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.
Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * * -->

<style>
.stars {
    line-height:12px;
    width: 12px;
    display:inline-block;
}
</style>

<?php

for ($i = 1; $i <= 10000; $i++){
    echo '<div class="stars">*</div>';
    if ($i % 100 == 0){
        echo '<br>';
    }
}