<!-- Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!).
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų,
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->

<?php
if (isset($_GET['redir']) && $_GET['redir'] == 1){
    header('Location: http://localhost/assignments/nd7-for0518/5red.php');
    die;
}
?>

<body style = "background-color: blue">
<a href = http://localhost/assignments/nd7-for0518/5blue.php?redir=1 style = "color: red">Nuoroda</a>
</body>


