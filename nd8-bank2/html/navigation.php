<nav>
    <div class= "nav_left">
        <div>ANTRAS BANKAS</div>

        <?php if ($_SESSION['logged']): ?>
        <a href="<?= URL ?>">Sąskaitų sąrašas</a>
        <a href="<?= URL ?>openNew">Nauja sąskaita</a>
        <?php endif ?>

        <?php if ($GLOBALS['url'][0] === ''): ?>
        <label for="search">Ieškoti: </label>
        <input type="search" name="search" placeholder="asmens kodas">
        <?php endif ?>

    </div>
    <?php if ($_SESSION['logged']): ?>
    <div>
        <a href="<?= URL ?>login">Atsijungti</a>
    </div>
    <?php endif ?>
</nav>