<?php
$basename = basename($_POST['id']);
  unlink('data/'.$basename);
  header('Location: /index.php');
?>
