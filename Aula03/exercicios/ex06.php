<form action="" method="GET">
    <label for="num">Digite o primeiro número:</label>
    <input type="text" name="num1" id="num">
    <label for="num">Digite o segundo número:</label>
    <input type="text" name="num2" id="num">
    <label for="num">Digite o terceiro número:</label>
    <input type="text" name="num3" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $maiorNum;

    if($num1 > $num2){
        $maiorNum = $num1;
    }else if($num1 < $num2){
        $maiorNum = $num2;
    }else if($maiorNum < $num3){
        $maiorNum = $num3;
    }
    echo 'O maior número é o: '. $maiorNum;


?>