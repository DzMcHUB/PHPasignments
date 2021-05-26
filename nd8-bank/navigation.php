<nav>
<h2>BANKAS</h2>
<?php if($_SESSION['logged'] == 1): ?>
    <a href="<?= URL ?>newaccount.php">Kurti nauja sąskaitą</a>
    <a href="<?= URL ?>accounts.php">Sąskaitų sąrašas</a>
    <div>
    <a href="<?= URL ?>login.php?logged=0">Atsijungti</a>
    </div>
<?php endif ?>    
</nav>
<?php return ?>
