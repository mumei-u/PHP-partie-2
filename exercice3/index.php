<?php
$exerciseNb = 3;
include '../header.php';
$age = 18;
$gender = 'homme';
$result = '';
if ($gender == 'femme' && $age >= 18) {
  $result = 'vous êtes un'.$gender.'et vous êtes majeur';
}else($gender == 'femme'){
  $result = 'vous êtes un '.$gender.' et vous êtes mineur'
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
