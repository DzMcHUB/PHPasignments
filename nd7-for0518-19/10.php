<!-- Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai.
Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$bodyColor = 'grey';
if(count($_POST)){
    $bodyColor = 'white';
}
?>

<body style="background-color: <?= $bodyColor ?>">

<!-- <?php
// if(count($_POST)){
//     _d($_POST);
//     echo count($_POST) - 1;
//     echo '<br>';
//     echo array_key_first($_POST);
// }
// else{
//     echo '<form action="" method="post">';
//     $abc = explode(' ','A B C D E F G H I J K L M O P Q R S T U V W Y Z');
//     $rand = rand(3,10);
//     echo '<input type="hidden" name="'.$rand.'">';
//     foreach(range(1, $rand) as $val){
//         echo '<label style = "color: red">'.$abc[$val-1].'</label>
//               <input type="checkbox" name="'.$abc[$val-1].'">';
//     }
//     echo '<button type="submit">Submit</button>';
//     echo '</form>';
// }
?> -->
<?php if ('GET' == $_SERVER['REQUEST_METHOD']): ?>

<form action="" method="post">
    <button type="submit">POST</button>
    <?php $count = rand(3,10) ?>
    <input type="hidden" name="all" value="<?= $count ?>">
    <?php foreach(range('A', 'K') as $letter): ?>
    <input type="checkbox" name="c[]"><?=$letter ?>
    <?php if(!(--$count)) break ?>
    <?php endforeach ?>
</form>

<?php else: ?>
<h1>Viso buvo pazymeta: <?= count($_POST['c'] ?? []) ?> raides </h1>
<h1>Viso buvo: <?= $_POST['all'] ?? 0 ?> raides </h1>
<?php endif ?>
</body>
</html>