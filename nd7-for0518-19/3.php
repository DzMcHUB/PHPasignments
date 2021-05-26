<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->


<?php
$color = '000';
if(isset($_GET['color'])){
    $color = $_GET['color'];
}
echo '<body style = "background-color:#' . $color . '">';

?>


<a href = 'http://localhost/assignments/nd7-for0518/3.php'>Juodas</a>
<br><br>
<form action="http://localhost/assignments/nd7-for0518/3.php" name="color">
<input type="text" name="color">
<button type="submit">Pakeisti spalva</button>
</form>
</body>