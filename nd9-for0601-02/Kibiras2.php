<?php

class Kibiras2 {

    static private $akmenuKiekisVisuoseKibiruose = 0;

    protected $akmenuKiekis = 0;

    public function PridetiAkmeni(){
       $this->akmenuKiekis++;
       self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function PridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose+= $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }

    public function getAkmenuKiekisVisuoseKibiruose(){
        echo 'Visuose kibiruose yra '.self::$akmenuKiekisVisuoseKibiruose. ' akmenų(ys)';
    }

    static function getAkmenysVisuoseKibiruose(){
        echo 'Visuose kibiruose yra '.self::$akmenuKiekisVisuoseKibiruose. ' akmenų(ys)';
    }
}