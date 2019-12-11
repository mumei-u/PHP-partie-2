<?php
$exerciseNb = 7;
include '../header.php';
$isok = false;
$result = '';
if ($isok) {
  $result = 'c\'est pas bon !!!';
}else {
  $result = 'c\'est ok !!';
}
?>
<p><?= $result ?></p>
<?php include '../footer.php'; ?>
