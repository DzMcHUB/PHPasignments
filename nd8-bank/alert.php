<?php
$msg = $_SESSION['error'] ?? ($_SESSION['msg'] ?? '');
if(!$msg){
    return;
}
?>
<?php if(!isset($_SESSION['msg']) || $_SESSION['msg'] == ''): ?>
<div class="failure_alert"><?= $msg ?></div>
<?php endif ?>

<?php if(!isset($_SESSION['error']) || $_SESSION['error'] == ''): ?>
<div class="success_alert"><?= $msg ?></div>
<?php endif?>
<?php 
unset($_SESSION['error']);
unset($_SESSION['msg']);
?>



