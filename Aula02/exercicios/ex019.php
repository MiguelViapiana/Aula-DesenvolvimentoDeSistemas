<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num"><br>
    <button type="submit">Enviar</button>
</form>
<?php

$num = $_GET['num'];
$desc =$num*0.81;

echo"O valor inicial é de: ". $num. ", e com um desconto de 9% é de: ". $desc;

?>