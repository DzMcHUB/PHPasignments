<?php

if(!$_POST['name']){
    $inputErrors[] = 'Neįvestas asmens vardas';
}
elseif(!preg_match('/[a-zA-Z]{3,}/', $_POST['name'])){
    $inputErrors[] = 'Neteisingas asmens vardas';
}
else{
    $account['name'] = $_POST['name'];
}

if(!$_POST['surname']){
    $inputErrors[] = 'Neįvesta asmens pavardė';
}
elseif(!preg_match('/[a-zA-Z]{3,}/', $_POST['surname'])){
    $inputErrors[] = 'Neteisinga asmens pavardė';
}
else{
   $account['surname'] = $_POST['surname'];
}

if(isset($accounts) && count($accounts) > 0){
    foreach($accounts as &$user){
        if($user['accountNumber'] == $_POST['accountNumber']){
            $inputErrors[] = 'Sąskaita su tokiu numeriu jau egzistuoja';
        }
        else{
            $account['accountNumber'] = $_POST['accountNumber'];
        }
    }
    unset($user);
}
else{
    $account['accountNumber'] = $_POST['accountNumber'];
}

if(!$_POST['socialNumber']){
    $inputErrors[] = 'Neįvestas asmens kodas';
}
elseif(!preg_match('/^[1-6][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[0-9]{3}[0-9]$/', $_POST['socialNumber'])){
    $inputErrors[] = 'Neteisingas asmens kodo formatas';
}
elseif(isset($accounts) && count($accounts) > 0){
    foreach($accounts as &$user){
        if($user['socialNumber'] == $_POST['socialNumber']){
            $inputErrors[] = 'Asmuo su nurodytu asmens kodu jau turi sąskaitą';
        }
        else{
            $account['socialNumber'] = $_POST['socialNumber'];
        }
    }
    unset($user);
}
else{
    $account['socialNumber'] = $_POST['socialNumber'];
}

return;
?>
