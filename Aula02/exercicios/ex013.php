<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num1" id="num"><br>
    <label for="num">Digite outro número:</label>
    <input type="text" name="num2" id="num"><br>
    <label for="num">Digite outro número:</label>
    <input type="text" name="num3" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$vel1 =$_GET['num1'];
$vel2 = $_GET['num2'];
$vel3 =$_GET['num3'];

$media = ($vel1 + $vel2 + $vel3)/3;
$media = number_format($media, 2);

echo "A media dos números ". $vel1 . ", " . $vel2 . " e ". $vel3 . " é de: ". $media;

?>