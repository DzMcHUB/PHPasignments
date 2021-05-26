<?php

class Zveris extends Miskas {

    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function papasakok($forestName=''){
        echo "Aš esu žvėris vardu $this->name.";
        $forestName = new Miskas($forestName);
        $forestName->papasakok($forestName);
    }

}