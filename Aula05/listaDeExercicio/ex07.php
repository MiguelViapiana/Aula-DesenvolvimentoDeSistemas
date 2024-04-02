<?php

    $num = array(6,8,9,10, 14);

    $soma=0;
    $mult=1;

    for ($i=0; $i < count($num); $i++) { 
        $soma += $num[$i];
        $mult *= $num[$i];

    }
    for ($i=0; $i < count($num); $i++) { 
        echo" ". $num[$i];
    }
    echo"<br>Soma: ". $soma."<br>";
    echo"Multiplicação: ". $mult;

?>