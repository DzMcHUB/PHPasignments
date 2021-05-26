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
