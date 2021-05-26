<?php
require __DIR__ .'/Kibiras1.php';
$kibiras = new Kibiras1;

echo 'Kibire pririnkta '.$kibiras->kiekPririnktaAkmenu().' akmenys(ų)';
echo '<br>';
$kibiras->PridetiAkmeni();
echo 'Kibire pririnkta '.$kibiras->kiekPririnktaAkmenu().' akmenys(ų)';
echo '<br>';
$kibiras->PridetiDaugAkmenu(5);
echo 'Kibire pririnkta '.$kibiras->kiekPririnktaAkmenu().' akmenys(ų)';
echo '<br><br>';


require __DIR__ .'/Pinigine.php';
$pinigine = new Pinigine;

$pinigine->skaiciuoti();
echo '<br>';
$pinigine->ideti(2);
$pinigine->skaiciuoti();
echo '<br>';
$pinigine->ideti(5);
$pinigine->skaiciuoti();
echo '<br><br>';


require __DIR__ .'/Kibiras3.php';
require __DIR__ .'/KibirasNePo1.php';

$kibiras2 = new KibirasNePo1;

echo 'Kibire pririnkta '.$kibiras2->kiekPririnktaAkmenu().' akmenys(ų)';
echo '<br>';
$kibiras2->PridetiAkmeni();
echo 'Kibire pririnkta '.$kibiras2->kiekPririnktaAkmenu().' akmenys(ų)';
echo '<br><br>';


require __DIR__ .'/Miskas.php';
require __DIR__ .'/Zveris.php';

$vilkas = new Zveris('vilkas');
$vilkas->papasakok('Žalia giria');
echo '<br><br>';


require __DIR__ .'/Stikline.php';

$stilkine200 = new Stikline(200);
$stilkine150 = new Stikline(150);
$stilkine100 = new Stikline(100);

$stilkine200->ipilti(200);
$stilkine150->ipilti($stilkine200->ispilti());
$stilkine100->ipilti($stilkine150->ispilti());
$stilkine100->ispilti();