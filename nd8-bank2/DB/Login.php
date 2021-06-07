<?php

namespace Bankas2\DB;

class Login {

    private $userData;

    public function __construct()
    {
        $this->read();
    }

    private function read() : void
    {
        $this->userData = json_decode(file_get_contents(DIR . 'DB/logins.json'), 1);
    }

    public function verifyLogin(string $name, string $surname, string $password) : bool
    {
        if (
            $name == $this->userData['name'] &&
            $surname == $this->userData['surname'] &&
            md5($password) == $this->userData['password']
        ){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}