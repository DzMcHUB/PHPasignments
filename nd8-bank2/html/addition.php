<?php ?>
<?php Bankas2\App:: alert(); ?>
<div class="main-block">
    <form action="<?= URL ?>add/<?= $account['id'] ?>" method="post">
        <fieldset>
            <legend>
                <h3>Sąskaita <?= $account['accountNumber'] ?></h3>
            </legend>
                <div class="personal-details">
                    <div>
                        <div>
                            <p>Vardas: <?= $account['name'] ?></p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>Pavardė: <?= $account['surname'] ?></p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>Sąskaitos likutis: <?= $account['balance'] ?> €</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label>Pridedama suma</label>
                            <input type="text" name="add">
                        </div>
                    </div>
                </div>
        </fieldset>
        <div class = "button_flex">
            <button type="submit">Pridėti lėšas</button>
            <a class="link_button" href="<?= URL ?>">Grįžti</a>
        </div>
    </form>
</div> 