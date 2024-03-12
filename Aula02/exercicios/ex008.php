<form action="" method="GET">
    <label for="num">Digite uma temperatura em graus Fahrenheit:</label>
    <input type="text" name="fahren" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$fahren = $_GET['fahren'];
$celcius = (5 *($fahren - 32)/9);

echo "A temperatud em Fahrenheit é ". $fahren . "e em Celcius é de: ". number_format($celcius, 1);

?>