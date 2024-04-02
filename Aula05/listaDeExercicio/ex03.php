<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num1" id="num"><br>
    <label for="num">Digite o segundo número:</label>
    <input type="text" name="num2" id="num"><br>
    <label for="num">Digite o terceiro número:</label>
    <input type="text" name="num3" id="num"><br>
    <label for="num">Digite o quarto número:</label>
    <input type="text" name="num4" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

    $num[0] = $_GET['num1'];
    $num[1] = $_GET['num2'];
    $num[2] = $_GET['num3'];
    $num[3] = $_GET['num4'];

    $soma =0;

    for ($i=0; $i < 4; $i++) { 
        $soma += $num[$i];
    }
    echo"A media dos números é: ". $soma/4;
    

?>