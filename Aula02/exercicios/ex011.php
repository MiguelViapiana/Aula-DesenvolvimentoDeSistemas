<form action="" method="GET">
    <label for="num">Digite a sua altura</label>
    <input type="text" name="altura" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$altura = $_GET['altura'];
$peso_idealM = (72.7 * $altura) - 58;
$peso_idealF = (62.1 * $altura) - 44.7;

echo "A sua altura é de ". $altura. "m, e o peso ideal para os homens com a sua altura é: ". $peso_idealM . "Kg, e para mulheres é de: ". $peso_idealF . "Kg";


?>