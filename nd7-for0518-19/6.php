<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST.
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai,
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->
<?php
$color = 'green';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $color = 'yellow';
}
echo '<body style = "background-color:'.$color.'">';
?>

<form action="" method="get">
<button type="submit">GET</button>
</form>
<br>
<form action="" method="post">
<button type="submit">POST</button>
</form>
</body>