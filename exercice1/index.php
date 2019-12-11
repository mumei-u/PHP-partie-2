<?php
$exerciseNb = 1;
include '../header.php';
$age = 20;
?>
<?php
    if($age >= 18){
        echo ' Vous êtes majeur';
    }else{
        echo ' Vous êtes mineur';
    }
?>
<?php include '../footer.php'; ?>
