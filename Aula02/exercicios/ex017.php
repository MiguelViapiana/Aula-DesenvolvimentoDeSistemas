<form action="" method="GET">
    <label for="num">Digite uma velocidade em metro por segundo(m/s):</label>
    <input type="text" name="ms" id="num"><br>
    
    <button type="submit">Enviar</button>
</form>

<?php

$ms = $_GET['ms'];
$kmh = $ms* 3.6;

echo "A velocidade em metro por segundo é de: ". $ms . "m/s, e a mesma velocidade em Quilometros por hora é de: ". $kmh."Km/h";

?>