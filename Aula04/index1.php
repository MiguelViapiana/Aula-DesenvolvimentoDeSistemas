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


    <h2>LISTA / ARRAY</h2>
    <?php

    $comidas = array('Batata', 'Miojo', 'Polenta');
    echo print_r($comidas);
    echo "<br>".$comidas[2];

    $comidas[3] = "Arroz";
    //$comidas[] = 30.5;
    //$comidas[] =true;
    $comidas[4] = "Feijão";
    echo print_r($comidas);

    $total_Comidas = count($comidas);
    echo "<br>Total: {$total_Comidas}";

    //for ($i=0; $i < $total_Comidas; $i++) { 
      //  echo "<li> Item: {$i} -". $comidas[$i]; 
    //}
    echo "<h4>Lista de compra: </h4>";
    foreach($comidas as $comida){
        echo "<li> Item -". $comida;
    }

    echo"<h4>Array com índice str:  </h4>";
    $pessoa = array("nome" => "Luan", "idade" => 19, "Estado" => "Feliz :D");
    echo $pessoa["nome"]."<br>";
    echo $pessoa["idade"]."<br>";
    echo $pessoa["Estado"]."<br>";

    foreach($pessoa as $chave => $valor){
        echo "<li>{$chave} - {$valor}";
    }

    echo"<h4>Array de Array: </h4>";
    $varias_pessoas = array(
        array("nome" => "Luan", "idade" => 19, "Estado" => "Feliz :D"),
        array("nome" => "Maria", "idade" => 23, "Estado" => "Cansada ;/"),
        array("nome" => "João", "idade" => 30, "Estado" => "Triste :C")
    );
    echo print_r($varias_pessoas);
    echo"<br><br>";

    for ($i=0; $i < count($varias_pessoas); $i++) { 
        echo "<br>Uma Pessoa:";
        echo print_r($varias_pessoas[ $i ]);

        foreach($varias_pessoas[$i] as $chave => $valor){
            echo "<li> {$chave} = {$valor}<br>";
        }
    }

    ?>
</body>
</html>