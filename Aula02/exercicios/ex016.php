<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num1" id="num"><br>
    <label for="num">Digite outro número:</label>
    <input type="text" name="num2" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num1 =$_GET['num1'];
$num2 = $_GET['num2'];

$Q1 = $num1 * $num1;
$Q2 = $num2 * $num2;

$SomaQ = $Q1 + $Q2;

echo "O quadrado dos números ". $num1 . " e ". $num2 . " são respectivamente: ". $Q1. " e ". $Q2 . "<br>";
echo "A soma dos quadrados dos números é: ". $SomaQ;

?>