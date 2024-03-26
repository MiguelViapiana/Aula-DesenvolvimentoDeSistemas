<form action="" method="GET">
    <label for="num">Digite um número para a sequência de Fibonacci:</label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>
<?php

$num = $_GET['num'];
$i =0;
$p=1;
$temp;
echo "A sequência de Fibonacci até o número $num é: <br>";
echo $i ." ";
echo $p ." ";
while(($temp =  $i + $p) <= $num){
    echo $temp." ";
    $i = $p;
    $p = $temp;
}

?>