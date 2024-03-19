<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - repetição</title>
</head>
<body>
    
    <h1>--- FOR --</h1>
    <?php

    for($i =0; $i < 10; $i++){
        echo "<br>Meu for funciona --Linha: {$i}";
        for($j =0; $j < 5; $j++){
            echo "--Coluna: {$j}";
        }
    }

    ?>

    <h1>--- WHILE ---</h1>
    <?php

    $a =0;
    while($a < 10){
        echo " # ";
        $a++;
    }
    ?>

    <h2>--- DO WHILE ---</h2>

    <?php

    $var = 87;
    do{
        echo "<br> Número: ". $var;
        $var+=3;
    }while($var < 100);

    ?>
</body>
</html>