<?php

    $num = array(1, 2, 3, 4, 5 ,6 ,7 ,8 ,9, 10, 11, 12, 13, 14 ,15, 16, 17, 18, 19, 20);
    $numPar;
    $numImpar;
    $i;
    $p =0;
    $y=0;

    for($i =0; $i< 20; $i++){
        if($num[$i] %2 == 0){
            $numPar[$p] = $num[$i];
            $p++;
        }else{
            $numImpar[$y] = $num[$i];
            $y++;
        }
    }
    echo "Números: <br>";
    for($i =0; $i< count($num); $i++){
        echo $num[$i]." ";
    }
    
    echo "<br>Números pares: <br>";
    for($i =0; $i< count($numPar); $i++){
        echo $numPar[$i]." ";
    }
    echo "<br>Números impares: <br>";
    for($i =0; $i< count($numImpar); $i++){
        echo $numImpar[$i]." ";
    }

?>