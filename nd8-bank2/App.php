<?php
namespace Bankas2;

use Bankas2\DB\Json;

class App {

    public static function redirect(string $link) : void
    {   
        header('Location: ' . URL . $link);
        die;
    }

    public static function checkIfLogged() : void
    {   
        session_start();
        if (!isset($_SESSION['logged']) || $_SESSION['logged'] == FALSE){
            App::redirect('login');
        }
    }

    public static function alert() : void
    {
        $msg = $_SESSION['error'] ?? ($_SESSION['msg'] ?? '');
        if(!$msg){
            return;
        }
        ?>
        <?php if(!isset($_SESSION['msg']) || $_SESSION['msg'] == ''): ?>
        <div class="error"><?= $msg ?></div>
        <?php endif ?>

        <?php if(!isset($_SESSION['error']) || $_SESSION['error'] == ''): ?>
        <div class="success"><?= $msg ?></div>
        <?php endif?>
        <?php 
        unset($_SESSION['error']);
        unset($_SESSION['msg']);
    }
}