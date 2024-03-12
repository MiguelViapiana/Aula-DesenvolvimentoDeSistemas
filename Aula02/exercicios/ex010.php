<form action="" method="GET">
    <label for="num">Digite um número inteiro:</label>
    <input type="text" name="int1" id="num"><br>
    <label for="num">Digite outro número inteiro</label>
    <input type="text" name="int2" id="num"><br>
    <label for="num">Digite um número real</label>
    <input type="text" name="real" id="num"><br>
    <button type="submit">Enviar</button>
</form>


<?php

$int1 = -$_GET['int1'];
$int2 = $_GET['int2'];
$real = $_GET['real'];

$r1 = (2*$int1)*($int2/2);
$r2 = ($int1*3)+$real;
$r3 = $real *($real * $real);

echo "Os números selecionados foram: ". $int1 . ", ". $int2. " e " . $real . "<br>";
echo "O resultado da operação 'O produto do dobro do primeiro com metade do segundo' é: ". $r1."<br>";
echo "O resultado da operação 'A soma do triplo do primeiro com o terceiro' é de: ". $r2. "<br>";
echo "O resultado da operação 'O terceiro elevado ao cubo' é de: ". $r3;


?>