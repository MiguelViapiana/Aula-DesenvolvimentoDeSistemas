<form action="" method="GET">
    <label for="num">Digite o primerio número:</label>
    <input type="text" name="num1" id="num">
    <label for="num">Digite o segundo número:</label>
    <input type="text" name="num2" id="num">
    <label for="num">Digite o tercerio número:</label>
    <input type="text" name="num3" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $vetor = [$num1, $num2, $num3]; 
    $aux;
    $troca = true;

    do{  
        $troca = false;
        for($i =0; $i <2; $i++){
            if($vetor[$i] < $vetor[$i+1]){
                $aux = $vetor[$i];
                $vetor[$i] = $vetor[$i+1];
                $vetor[$i +1] = $aux;
                $troca=true;
            }
        }
    }while($troca == true);

    echo"Os números em ordem decrescente é: ";
    for($i =0; $i <3; $i++){
        echo $vetor[$i]." ";
    }



?>