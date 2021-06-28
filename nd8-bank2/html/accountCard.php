<li>
    <div>
        <span>Vardas: <?= $accounts[$index]['name'] ?></span>
        <span>Pavardė: <?= $accounts[$index]['surname'] ?></span>
        <span>Asmens kodas: <?= $accounts[$index]['socialNumber'] ?></span>
        <span>Sąskaitos numeris: <?= $accounts[$index]['accountNumber'] ?></span>
        <span>Sąskaitos likutis: <?= $accounts[$index]['balance'] ?> €</span>
    </div>
    <div>
        <form action="<?= URL ?>delete/<?= $accounts[$index]['id'] ?>" method="post">
            <button type="submit">Trinti sąskaitą</button>
        </form>
        <a class="green" href="<?= URL ?>add/<?= $accounts[$index]['id'] ?>">Pridėti lėšų</a>
        <a class="red" href="<?= URL ?>sub/<?= $accounts[$index]['id'] ?>">Atsiimti lėšas</a>
    </div>
</li>