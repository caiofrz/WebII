<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

<form action="scriptAdicionar.php" method="post">
    <input type="text" name="task" id="">
    <input type="submit" value="Enviar">
</form>
<?php
    $file = file_get_contents('tasks.txt');
    echo $file;
?>
<form action="scriptApagar.php" method="post">
    <br/>
    <input type="submit" value="Excluir arquivo">
</form>

    
</body>
</html>