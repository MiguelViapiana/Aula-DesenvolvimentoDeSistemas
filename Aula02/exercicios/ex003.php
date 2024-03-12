<form action="" method="GET">
    <label for="num">Digite o primeiro número:</label>
    <input type="text" name="num1" id="num"><br>
    <label for="num2">Digite o segundo número:</label>
    <input type="text" name="num2" id="num2"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$num_soma = $num1 + $num2;

echo "A soma dos número ". $num1 . " e " . $num2 . " é de: " . $num_soma;

?>