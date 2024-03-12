<form action="" method="GET">
    <label for="num">Digite a sua altura:</label>
    <input type="text" name="altura" id="num"><br>
    <label for="num">Digite o seu peso</label>
    <input type="text" name="peso" id="num"><br>
    
    <button type="submit">Enviar</button>
</form>

<?php

$altura = $_GET['altura'];
$peso = $_GET['peso'];

$imc = $peso / ($altura*$altura);

echo "O IMC de uma pessoa com ". $altura . " de altura e ". $peso . " de peso é de: ". number_format($imc, 2);


?>