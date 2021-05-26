<?php

class Stikline {

    private $turis = 0, $kiekis = 0;

    public function __construct($turis){
        $this->turis = $turis;
    }

    public function ipilti($kiekis){
        $this->kiekis += $kiekis;
        if($this->kiekis > $this->turis){
            $this->kiekis = $this->turis;
        }
    }

    public function ispilti(){
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        echo $kiekis . "-" ;
        echo $this->kiekis . '<br>';
        return $kiekis;
    }
}