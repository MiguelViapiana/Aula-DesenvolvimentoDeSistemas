<form action="" method="GET">
    <label for="num">Digite uma temperatura em graus Celsius:</label>
    <input type="text" name="cel" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$celcius = $_GET['cel'];
$fahren = ($celcius *1.8) + 32;

echo "A temperatur em Celcius é: ". $celcius . " e em Fahrenheit é de: ". number_format($fahren, 1);

?>