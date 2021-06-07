<?php

class Pinigine {

    private $popieriniaiPinigai = 0, $metaliniaiPinigai = 0, $monetos = 0, $banknotai = 0;

    public function ideti($kiekis){
        if($kiekis <= 2){
            $this->metaliniaiPinigai += $kiekis;
            $this->monetos++;
        }
        else{
            $this->popieriniaiPinigai += $kiekis;
            $this->banknotai++;
        }
    }

    public function skaiciuoti(){
        $sum = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo "Pinigneje metaliniu ($this->metaliniaiPinigai) ir popieriniu ($this->popieriniaiPinigai) pinigu suma - $sum";
        return $sum;
    }

    public function monetos(){
        echo 'Pinigneje monetų - '.$this->monetos;
    }
    public function banknotai(){
        echo 'Pinigneje banknotu - '.$this->banknotai;
    }
}