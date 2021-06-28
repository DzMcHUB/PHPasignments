<?php if(count($accounts) <= 1): ?>
    <?php Bankas2\App:: alert(); ?>
    <h1 style = "text-align: center; margin-top: 1em">Sąskaitų nėra</h1>
<?php else: ?>
    <?php Bankas2\App:: alert(); ?>
    <ul id="results">
        <?php foreach($accounts as $index => $user): ?>
            <?php if($index != 0): ?>
                <?php require DIR . 'html/accountCard.php' ?>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
<?php endif ?>
