<?php

class Krepsys {
   const DYDIS = 500;

   private $pririnktaGrybu = 0;

    // public function rinktiGrybus(){
    //     $krepsioSvoris = 0;

    //     do{
    //         $grybas = new Grybas;

    //         if($grybas->valgomas && !$grybas->sukirmijes){
    //             $this->pririnktaGrybu++;
    //             $krepsioSvoris += $grybas->svoris;
    //             echo "Pridėta(s) $this->pririnktaGrybu grybas(ai)<br>";
    //         }
    //     }while($krepsioSvoris <= self::DYDIS);
    // }

    public function rinktiGrybus(Grybas $grybas){
        if($grybas->valgomas && !$grybas->sukirmijes){
            $this->pririnktaGrybu += $grybas->svoris;
        }
        return self::DYDIS > $this->pririnktaGrybu;
    }
}