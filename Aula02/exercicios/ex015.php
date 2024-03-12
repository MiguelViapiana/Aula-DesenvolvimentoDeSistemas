<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num= $_GET['num'];
$res5 = ($num/100) * 5;
$res50 = ($num/100) * 50;

echo "O numero é de: ". $num . "<br>E 5% dele é de: ". $res5 . "<br>E 50% é de: ". $res50;

?>