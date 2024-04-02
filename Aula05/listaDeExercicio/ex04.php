<?php

    $char = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
    $charConsoante;
    $cont;
    $p = 0;

    for ($i = 0; $i < 10; $i++) {
        if ($char[$i] != "a" && $char[$i] != "e" && $char[$i] != "i" && $char[$i] != "o" && $char[$i] != "u") {
            $charConsoante[$p] = $char[$i];
            $p++;
        }
    }

    echo "As letras consoantes são as: <br>";
    for ($p = 0; $p < count($charConsoante); $p++) {
        echo "Char: " . $charConsoante[$p] . "<br>";
    }
?>