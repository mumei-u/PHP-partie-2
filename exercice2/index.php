<?php
$exerciseNb = 2;
include '../header.php';
$isEasy = (bool)random_int(0, 1);
?>
<p>
<?php
if(random_int(0, 1)){
  echo ' C\'est facile!!';
}else{
  echo ' C\'est difficile !!!';
}
?>
</p>
<?php include '../footer.php'; ?>
