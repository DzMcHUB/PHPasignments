<?php

namespace Bankas2\Controller;

use Bankas2\DB\Json;

class Validator {

    protected static function accountNumberGenerator() : string
    {
        $controlDigits = '01';
        $bankCode = '00000';
        $accountNumber = 'LT' . $controlDigits . $bankCode . sprintf("%011d", rand(0,99999999999));
        $accounts = Json::getUserData()->showAll();

        if (count($accounts) > 1){

            foreach ($accounts as $index => $account){

                if(!$index == 0){

                    if ($accountNumber == $account['accountNumber']){

                        $accountNumber = 'LT' . $controlDigits . $bankCode . sprintf("%011d", rand(0,99999999999));
                        self::accountNumberValidation($accountNumber);
                    }
                    else{
                        return $accountNumber;
                    }
                }
            }
        }
        else{
            return $accountNumber;
        }
    }

    protected static function newAccountValidation() : bool
    {
        $accounts = Json::getUserData()->showAll();

        if(!$_POST['name']){
            $inputErrors[] = 'Neįvestas asmens vardas';
        }
        elseif(!preg_match('/[a-zA-Z]{3,}/', $_POST['name'])){
            $inputErrors[] = 'Neteisingas asmens vardas';
        }

        if(!$_POST['surname']){
            $inputErrors[] = 'Neįvesta asmens pavardė';
        }
        elseif(!preg_match('/[a-zA-Z]{3,}/', $_POST['surname'])){
            $inputErrors[] = 'Neteisinga asmens pavardė';
        }

        if(!$_POST['socialNumber']){
            $inputErrors[] = 'Neįvestas asmens kodas';
        }
        elseif(!preg_match('/^[1-6][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[0-9]{3}[0-9]$/', $_POST['socialNumber'])){
            $inputErrors[] = 'Neteisingas asmens kodo formatas';
        }
        elseif(isset($accounts) && count($accounts) > 1){

            foreach($accounts as &$user){

                if($user['socialNumber'] == $_POST['socialNumber']){
                    $inputErrors[] = 'Asmuo su nurodytu asmens kodu jau turi sąskaitą';
                }
            }
            unset($user);
        }

        if(isset($inputErrors)){
            foreach($inputErrors as $index => $val){
                if(!$index){
                    $_SESSION['error'] .= $val. '<br>';
                }
                else{
                    $_SESSION['error'] .= '<br>' .$val. '<br>';
                }   
            }
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    protected static function deleteExeValidation(int $userId) : bool
    {
        if (Json::getUserData()->show($userId)['balance'] > 0){
            $_SESSION['error'] = 'Sąskaita nėra tuščia';
            return FALSE;
        }
        else{
            $_SESSION['msg'] = 'Sąskaita ištrinta';
            return TRUE;
        }
    }

    protected static function additionExeValidation(int $userId) : bool
    {
        if (
            !is_float((float) $_POST['add']) ||
            $_POST['add'] <= 0 ||
            !preg_match("/^\d*(\.\d{0,2})?$/", $_POST['add'])
        ){
            $_SESSION['error'] = 'Įrašykite suma tinkamu formatu';
            return FALSE;
        }
        else{
            $_SESSION['msg'] = 'Pridėta ' .(float) $_POST['add']. '€';
            return TRUE;
        }
    }

    protected static function subtractionExeValidation(int $userId) : bool
    {
        if (
            !is_float((float) $_POST['sub']) ||
            $_POST['sub'] <= 0 ||
            !preg_match("/^\d*(\.\d{0,2})?$/", $_POST['sub'])
        ){
            $_SESSION['error'] = 'Įrašykite suma tinkamu formatu';
            return FALSE;
        }
        elseif ($newBalance < 0){
            $_SESSION['error'] = 'Nepakankamas sąskaitos likutis transakcijai';
            return FALSE;
        }
        else{
            $_SESSION['msg'] = 'Atsiimta ' .(float) $_POST['sub']. '€';
            return TRUE;
        }
    }

    protected static function accountFilter()
    {
        $rawData = file_get_contents("php://input");
        $request = json_decode($rawData, 1);

        if (!isset($request['search'])){
            $request['search'] = '';
        }
        $search = $request['search'];

        ob_start();

        foreach($accounts as $index => $user){
            if ($index != 0){
                if(str_contains ($user['socialNumber'], $search)){
                    ?>
                    <li>
                        <div>
                            <span>Vardas: <?= $accounts[$index]['name'] ?></span>
                            <span>Pavardė: <?= $accounts[$index]['surname'] ?></span>
                            <span>Asmens kodas: <?= $accounts[$index]['socialNumber'] ?></span>
                            <span>Sąskaitos numeris: <?= $accounts[$index]['accountNumber'] ?></span>
                            <span>Sąskaitos likutis: <?= $accounts[$index]['balance'] ?> €</span>
                        </div>
                        <div>
                            <form action="<?= URL ?>delete/<?= $accounts[$index]['id'] ?>" method="post">
                                <button type="submit">Trinti sąskaitą</button>
                            </form>
                            <a class="green" href="<?= URL ?>add/<?= $accounts[$index]['id'] ?>">Pridėti lėšų</a>
                            <a class="red" href="<?= URL ?>sub/<?= $accounts[$index]['id'] ?>">Atsiimti lėšas</a>
                        </div>
                    </li>
                    <?php 
                }
            }
        }
        
        $html = ob_get_contents();
        ob_end_clean();
        
        $response = ['html' => $html];
        header('Content-type: application/json');
        echo json_encode($response);
        die;
    }
}