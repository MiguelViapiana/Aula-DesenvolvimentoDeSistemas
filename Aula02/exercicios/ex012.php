<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num1" id="num"><br>
    <label for="num">Digite outro número:</label>
    <input type="text" name="num2" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num1 = $_GET['num1'];
$num2 =$_GET['num2'];
$soma= $num1 + $num2;
echo "A soma dos numeros ". $num1. " e ". $num2 . " é de: ". $soma ."<br>";

$res = $soma * $num1;
echo"E a multiplicação do resultado da soma com o primeiro número é de: ". $res; 

?>