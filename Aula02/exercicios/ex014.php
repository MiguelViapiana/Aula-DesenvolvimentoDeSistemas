<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num = $_GET['num'];
$res = ($num/100)*15;

echo "15% de ". $num . " é de: ". $res;

?>