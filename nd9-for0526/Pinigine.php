<?php

class Pinigine {

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis){
        if($kiekis <= 2){
            $this->metaliniaiPinigai += $kiekis;
        }
        else{
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti(){
        $sum = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo "Pinigneje metaliniu ($this->metaliniaiPinigai) ir popieriniu ($this->popieriniaiPinigai) pinigu suma - $sum";
        return $sum;
    }
}