<?php

require ('Kibiras2.php');

$kibiras = new Kibiras2;
$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;

$kibiras2->PridetiDaugAkmenu(8);
$kibiras1->PridetiAkmeni();

$kibiras->getAkmenuKiekisVisuoseKibiruose();
echo '<br>';
Kibiras2::getAkmenysVisuoseKibiruose();
echo '<br><br>';

require ('Grybas.php');
require ('Krepsys.php');

$krepsys = new Krepsys;
do{}
while($krepsys->rinktiGrybus(new Grybas));
echo '<pre>';
var_dump($krepsys);
echo '<br><br>';

require ('Pinigine.php');

$pinigine = new Pinigine;

$pinigine->ideti(2);
$pinigine->ideti(2);
$pinigine->ideti(4);
$pinigine->monetos();
echo '<br>';
$pinigine->banknotai();
echo '<br><br>';

require ('MarsoPalydovas.php');

$palydovas1 = MarsoPalydovas::getPalydovas();
$palydovas2 = MarsoPalydovas::getPalydovas();
$palydovas3 = MarsoPalydovas::getPalydovas();

echo '<pre>';
var_dump($palydovas1);
var_dump($palydovas2);
var_dump($palydovas3);
echo '<br><br>';

require ('Tenisininkas.php');

$z1 =Tenisininkas::getZaidejas('Bob');
$z2 =Tenisininkas::getZaidejas('Steve');

Tenisininkas::zaidimoPradzia();

if($zaidejas1->arTuriKamuoliuka()){
    echo $zaidejas1->getVardas().' turi kamuoliuka';
}
else{
    echo $zaidejas1->getVardas().' neturi kamuoliuko';
};
echo '<br>';

$zaidejas1->perduotiKamuoliuka();
echo '<br>';

if($zaidejas1->arTuriKamuoliuka()){
    echo $zaidejas1->getVardas().' turi kamuoliuka';
}
else{
    echo $zaidejas1->getVardas().' neturi kamuoliuko';
};
echo '<br>';



echo '<pre>';
var_dump($z1);
var_dump($z2);
