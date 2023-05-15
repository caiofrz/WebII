<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //Referencia
    echo "<h1>Referencia</h1>";
    function incrementar(&$var)
    {
        return $var++;
    }
    $x=5;
    echo incrementar($x);

    //Valor
    function incrementar2($num) {
        return $num+=1;
    }
    
    echo "<h1>Valor</h1>";
    $num = 4;
    $novo_num = incrementar2($num);
    echo "num: " . $num . "<br>"; 
    echo "novo_num: " . $novo_num; 
    ?>


</body>
</html>