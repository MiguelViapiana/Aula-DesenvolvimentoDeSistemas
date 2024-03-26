<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num1" id="num">
    <label for="num">Digite outro número:</label>
    <input type="text" name="num2" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num1 = $num1 +1;
    echo "Os números que estão entre o intervalo de {$num1} e {$num2}<br>";
    for($i = $num1; $i < $num2; $i++){
        echo " ".$i;
    }

?>