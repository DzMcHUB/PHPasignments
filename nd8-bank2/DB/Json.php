<?php

namespace Bankas2\DB;

use Bankas2\DB\DataBase;

class Json implements DataBase{

    private $userData;
    private static $db;
    private static $json;

    public static function getUserData()
    {
        return self::$json ?? self::$json = new self;
    }

    private function __construct()
    {
        $this->read();
    }

    public function __destruct()
    {
        $this->write();
    }

    private function read() : void
    {
        if(!file_exists(DIR . 'DB/userData.json')){
            file_put_contents(DIR . 'DB/userData.json', json_encode([0]));
        }
        $this->userData = json_decode(file_get_contents(DIR . 'DB/userData.json'), 1);
    }

     private function write() : void 
    {
        file_put_contents(DIR . 'DB/userData.json', json_encode($this->userData));
    }

    public function create(array $userData) : void
    {
        $this->userData[rand(1,120)] = $userData;
    }
 
    public function update(int $userId, array $userData) : void
    {
        foreach($this->userData as $index => $user){
            if($user['id'] == $userId){
                $this->userData[$index] = $userData;
                break;
            }
        }
    }

    public function updateLastId(int $lastId) : void
    {
        $this->userData[0] = $lastId;
    }
 
    public function delete(int $userId) : void
    {
        foreach($this->userData as $index => $user){
            if($user['id'] == $userId){
                unset($this->userData[$index]);
                break;
            }
        }
    }
 
    public function show(int $userId) : array
    {
        foreach($this->userData as $index => $user){
            if(isset($user['id']) && $user['id'] == $userId){
                return $this->userData[$index];
            }
        }
    }

    public function showLastId() : int
    {
        return $this->userData[0];
    }
    
    public function showAll() : array
    {
        return $this->userData;
    }
}