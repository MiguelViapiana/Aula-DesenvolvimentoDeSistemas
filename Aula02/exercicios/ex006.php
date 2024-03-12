<form action="" method="GET">
    <label for="num">Digite alguma número:</label>
    <input type="text" name="num" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num = $_GET['num'];
$areaQuadrado = $num * $num;

echo "A area é de: ". $areaQuadrado . " e o dobro de sua area é de: ". ($areaQuadrado * 2);

?>