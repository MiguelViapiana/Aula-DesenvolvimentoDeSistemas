<form action="" method="GET">
    <label for="num">Digite a primeiro nota:</label>
    <input type="text" name="nota1" id="num"><br>
    <label for="num2">Digite a segunda nota:</label>
    <input type="text" name="nota2" id="num2"><br>
    <label for="num3">Digite a terceira nota:</label>
    <input type="text" name="nota3" id="num3"><br>

    <button type="submit">Enviar</button>
</form>


<?php

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$nota_media = ($nota1 + $nota2 + $nota3)/ 3;

echo "A media das notas ". $nota1. " , ". $nota2. " e ". $nota3 . " é de: ". number_format($nota_media, 1);

?>