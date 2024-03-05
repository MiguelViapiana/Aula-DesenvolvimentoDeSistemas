<?php

$altura = 1.80;
$peso = 69;

$imc = $peso / ($altura*$altura);

echo "O IMC de uma pessoa com ". $altura . " de altura e ". $peso . " de peso é de: ". number_format($imc, 2);


?>