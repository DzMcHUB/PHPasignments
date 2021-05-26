<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10)
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką,
fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius,
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$bodyColor = 'black';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bodyColor = 'white';
}
?>

<body style="background-color: <?= $bodyColor ?>">

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    _d($_POST);
    echo count($_POST);

}
else{
    echo '<form action="" method="post">';
    $abc = explode(' ','A B C D E F G H I J K L M O P Q R S T U V W Y Z');
    $rand = rand(3,10);
    foreach(range(1, $rand) as $val){
        echo '<label style = "color: red">'.$abc[$val-1].'</label>
              <input type="checkbox" name="'.$abc[$val-1].'">';
    }
    echo '<button type="submit">Submit</button>';
    echo '</form>';
}
?>

</body>
</html>