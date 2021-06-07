<?php Bankas2\App:: alert(); ?>
<div class="main-block">
  <form action="<?= URL ?>login" method="post">
    <h1>Prisijunkte</h1>
    <fieldset>
      <legend>
        <h3></h3>
      </legend>
      <div  class="personal-details">
        <div>
          <div><label>Vardas</label><input type="name" name="name"></div>
          <div><label>Pavardė</label><input type="surname" name="surname"></div>
          <div><label>Slaptažodis</label><input type="password" name="password"></div>
    </fieldset>
    <button type="submit">Prisijungti</button>
  </form>
</div> 