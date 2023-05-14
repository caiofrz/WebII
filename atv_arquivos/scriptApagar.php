<?php
  $file = file_get_contents('tasks.txt');
  $file = "";

  file_put_contents('tasks.txt', $file);
  header('Location: index.php');
?>