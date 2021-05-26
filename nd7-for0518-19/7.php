<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST
metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->
<?php
$color = 'green';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $color = 'yellow';
    header('Location: http://localhost/assignments/nd7-for0518-19/7.php');
    die;
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