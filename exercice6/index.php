<?php
$exerciseNb = 6;
include '../header.php';
$age = 20;
$result = '';
if ($age >= 18) {
  $result = 'Tu es majeur';
}else {
  $result = 'Tu es mineur';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
