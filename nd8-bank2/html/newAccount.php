<?php Bankas2\App:: alert(); ?>
<div class="main-block">
    <form action="<?= URL ?>openNew" method="post">
      <h1>Naujos sąskaitos informacija</h1>
      <fieldset>
        <legend>
          <h3>Sąskaitos informacija</h3>
        </legend>
        <div  class="account-details">
          <div><label>Sąskaitos numeris:</label><input type="accNo" name="accountNumber" value="<?= $randAccNo ?>" readonly></div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Asmeninė informacija</h3>
        </legend>
        <div  class="personal-details">
          <div>
            <div><label>Vardas</label><input type="name" name="name"></div>
            <div><label>Pavardė</label><input type="surname" name="surname"></div>
            <div><label>Asmens kodas</label><input type="socialNumber" name="socialNumber"></div>
      </fieldset>
      <button type="submit" href="/">Kurti sąskaitą</button>
    </form>
</div> 