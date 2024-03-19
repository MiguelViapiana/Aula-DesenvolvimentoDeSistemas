<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num">
    <label for="num2">Digite outro número:</label>
    <input type="text" name="num2" id="num">
    <button type="submit">Enviar</button>
</form>
<?php

    $num = $_GET["num"];
    $num2 = $_GET["num2"];

    if($num > $num2){
        echo "O maior número é o ". $num;

    }else{
        echo "O maior número é o ". $num2;
    }

?>