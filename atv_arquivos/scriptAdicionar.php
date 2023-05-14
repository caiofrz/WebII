<?php
    $task = filter_input(INPUT_POST,'task');

    $file = file_get_contents('tasks.txt');
    $file .= "<br/>".$task;

  file_put_contents('tasks.txt', $file);
  header('Location: index.php');
?>