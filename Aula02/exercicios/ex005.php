
<form action="" method="GET">
    <label for="metro">Digite alguma medida em metros:</label>
    <input type="text" name="metro" id="num"><br>
    <button type="submit">Enviar</button>
</form>
<?php

$metro = $_GET['metro'];
$centimetro = $metro * 100;

echo "O valor de " . $metro . " metros em centímetros é de: ".  number_format($centimetro, 2);

?>