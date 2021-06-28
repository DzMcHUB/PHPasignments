<?php
namespace Bankas2\Controller;

use Bankas2\DB\Json;
use Bankas2\App;
use Bankas2\DB\Login;
use Bankas2\Controller\Validator;

class Account extends Validator {
    
    public function index() : void
    {   
        App::checkIfLogged();
        $accounts = Json::getUserData()->showAll();
        uasort($accounts, function ($a, $b){
            if(isset($a['surname']) && isset($b['surname'])){
                return $a['surname'] <=> $b['surname'];
            }
        });
        require DIR . 'html/header.php';
        require DIR . 'html/accountList.php';
        require DIR . 'html/footer.php';
    }

    public function create() : void
    {
        App::checkIfLogged();
        require DIR . 'html/header.php';
        $randAccNo = self::accountNumberGenerator();
        require DIR . 'html/newAccount.php';
        require DIR . 'html/footer.php';
    }

    public function createExe() : void
    {
        App::checkIfLogged();
        $lastID = Json::getUserData()->showLastId();
        
        if (self::newAccountValidation()){

            $newId = ++$lastID;
            $account = 
            [
                'id' => $newId,
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'socialNumber' => $_POST['socialNumber'],
                'accountNumber' => $_POST['accountNumber'],
                'balance' => 0
            ];
            Json::getUserData()->updateLastId($lastID);
            Json::getUserData()->create($account);
            App::redirect('');
        }
        App::redirect('openNew');
    }

    public function deleteExe(int $userId) : void
    {   
        App::checkIfLogged();
        if (self::deleteExeValidation($userId)){
            Json::getUserData()->delete($userId);
        };
        App::redirect('');
    }

    public function addition(int $userId) : void
    {
        App::checkIfLogged();
        require DIR . 'html/header.php';
        $account = Json::getUserData()->show($userId);
        require DIR . 'html/addition.php';
        require DIR . 'html/footer.php';
    }

    public function additionExe(int $userId) : void
    {   
        App::checkIfLogged();
        if (self::additionExeValidation($userId)){

            $account = Json::getUserData()->show($userId);
            $newBalance = $account['balance'] + (float) $_POST['add'];
            $account['balance'] = $newBalance;
            $account = Json::getUserData()->update($userId, $account);
        }
        App::redirect('add/' . $userId);
    }

    public function subtraction(int $userId) : void
    {   
        App::checkIfLogged();
        if (Json::getUserData()->show($userId)['balance'] == 0){
            $_SESSION['error'] = 'Sąskaita tuščia, išimti lėšų negalima';
            App::redirect('');
        }
        require DIR . 'html/header.php';
        $account = Json::getUserData()->show($userId);
        require DIR . 'html/subtraction.php';
        require DIR . 'html/footer.php';
    }

    public function subtractionExe(int $userId) : void
    {   
        App::checkIfLogged();
        $account = Json::getUserData()->show($userId);
        $newBalance = $account['balance'] - (float) $_POST['sub'];

        if (self::subtractionExeValidation($userId)){
            $account['balance'] = $newBalance;
            $account = Json::getUserData()->update($userId, $account);
        }
        App::redirect('sub/' . $userId);
    }

    public function login() : void
    {   
        $_SESSION['logged'] = FALSE;
        require DIR . 'html/header.php';
        require DIR . 'html/login.php';
        require DIR . 'html/footer.php';
    }

    public function loginExe() : void
    {
        if ((new Login)->verifyLogin($_POST['name'], $_POST['surname'], $_POST['password'])){
            $_SESSION['logged'] = TRUE;
            App::redirect('');
        }
        else{
            $_SESSION['error'] = 'Neteisinga prisjungimo informacija';
            App::redirect('login');
        }
    }

    public function filterAccounts()
    {   
        $accounts = Json::getUserData()->showAll();
        uasort($accounts, function ($a, $b){
            if(isset($a['surname']) && isset($b['surname'])){
                return $a['surname'] <=> $b['surname'];
            }
        });
        self::accountFilter($accounts);
    }
}