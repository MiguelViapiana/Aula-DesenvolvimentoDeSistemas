
<?php

$int1 = -4;
$int2 = 8;
$real = 9.54;

$r1 = (2*$int1)*($int2/2);
$r2 = ($int1*3)+$real;
$r3 = $real *($real * $real);

echo "Os números selecionados foram: ". $int1 . ", ". $int2. " e " . $real . "<br>";
echo "O resultado da operação 'O produto do dobro do primeiro com metade do segundo' é: ". $r1."<br>";
echo "O resultado da operação 'A soma do triplo do primeiro com o terceiro' é de: ". $r2. "<br>";
echo "O resultado da operação 'O terceiro elevado ao cubo' é de: ". $r3;


?>