<?php

$Distancia = 467;
$ConsumoGas = 45;

$ConsumoMedia =$Distancia / $ConsumoGas;

echo"A distancia percorrida foi de:". $Distancia . "Km/h com o consumo de gasolina de: ". $ConsumoGas . "L. O consumo medio foi de: ". number_format($ConsumoMedia, 2);

?>