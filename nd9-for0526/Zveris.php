<?php

class Zveris extends Miskas {

    protected $name;

    public function __construct($name, $forestName=''){
        $this->name = $name;
        $this->papasakok($forestName);
    }

    protected function papasakok($forestName=''){
        echo "Aš esu žvėris vardu $this->name.";
        parent::__construct($forestName);
        parent::papasakok();
    }
}