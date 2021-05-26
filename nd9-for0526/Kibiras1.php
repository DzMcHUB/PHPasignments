<?php

class Kibiras1 {

    protected $akmenuKiekis = 0;

    public function PridetiAkmeni(){
       $this->akmenuKiekis++;
    }

    public function PridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }
}