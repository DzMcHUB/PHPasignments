<?php

class MarsoPalydovas {

    private $title;
    private static $palydovai = [];

    public static function getPalydovas(){
        if(!self::$palydovai){
            self::$palydovai['Deimas'] = new MarsoPalydovas;
            return self::$palydovai['Deimas'];
        }
        elseif(count(self::$palydovai) == 1){
            self::$palydovai['Fobas'] = new MarsoPalydovas;
            return self::$palydovai['Fobas'];
        }
        else{
            return self::$palydovai[array_rand(self::$palydovai,1)];
        }
    }

    private function __construct(){
        if(!self::$palydovai){
            $this->title ='Deimas';
        }
        else{
            $this->title ='Fobas';
        }
    }
}