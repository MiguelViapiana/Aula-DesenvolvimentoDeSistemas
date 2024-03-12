<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$num = $_GET['num'];
$descFinal = $num - ($num*0.09);
$desc =($num*0.09);


echo"O valor inicial é de: ". $num. ", o valor do desconte é de: ". $desc .", e com um desconto de 9% é de: ". $descFinal;

?>