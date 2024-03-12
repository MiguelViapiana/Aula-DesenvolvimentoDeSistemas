<form action="" method="GET">
    <label for="num">Digite um número para raio:</label>
    <input type="text" name="raio" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

$raio = $_GET['raio'];

$perímetro = 2*M_PI*$raio;
$area = M_PI*($raio * $raio);

echo "O raio digitado foi de: ". number_format($raio, 2) . "<br>";
echo "O perímetro é de: ". number_format($perímetro, 2). "<br>";
echo "A área é de: ". number_format($area, 2). "<br>";

?>