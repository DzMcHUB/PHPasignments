<?php

class Tenisininkas {

    private $vardas, $kamuoliukas = FALSE;
    private static $zaidejas1, $zaidejas2;

    public static function getZaidejas($vardas){
        if(!self::$zaidejas1){
            self::$zaidejas1 = new Tenisininkas($vardas);
            return self::$zaidejas1;
        }
        elseif(!self::$zaidejas2){
            self::$zaidejas2 = new Tenisininkas($vardas);
            return self::$zaidejas2;
        }
        else{
            echo 'Jau yra maksimalus zaideju skaicius';
        }
    }

    private function __construct($vardas){
        $this->vardas = $vardas;
    }

    public function arTuriKamuoliuka(){
        return $this->kamuoliukas;
    }

    public function perduotiKamuoliuka(){
        if($this->vardas == self::$zaidejas1->vardas && self::$zaidejas1->kamuoliukas === TRUE){
            self::$zaidejas1->kamuoliukas = FALSE;
            self::$zaidejas2->kamuoliukas = TRUE;
            return;
        }
        elseif($this->vardas == self::$zaidejas2->vardas && self::$zaidejas2->kamuoliukas === TRUE){
            self::$zaidejas2->kamuoliukas = FALSE;
            self::$zaidejas1->kamuoliukas = TRUE;
            return;
        }
        else{
            echo 'Zaidejas negali perduoti kamuoliuko, nes jo neturi';
            return;
        }
    }

    public static function zaidimoPradzia(){
        if(!self::$zaidejas1 || !self::$zaidejas2){
            echo 'Truksta zaideju(o)';
            return;
        }
        elseif(self::$zaidejas1->kamuoliukas === TRUE || self::$zaidejas2->kamuoliukas === TRUE){
            echo 'Zaidimas jau pradetas';
            return;
        }
        else{
            if (rand(0,1)){
                self::$zaidejas1->kamuoliukas = TRUE;
            }
            else{
                self::$zaidejas2->kamuoliukas = TRUE;
            }
            return;
        }
    }

    public function getVardas(){
        return $this->vardas;
    }
}