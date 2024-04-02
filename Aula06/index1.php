<?php



function formulario($nome, $numeros)
{
    echo "<h2> {$nome} </h2>";
    echo '<form action= "" method="GET" >';
    for ($i = 0; $i < $numeros; $i++) {
        echo "<br>";
        echo '<label> Numero' . ($i + 1) . '</label>';
        echo '<input name="num' . ($i + 1) . '" type="text">';
    }

    echo '<button type"submit">Enviar</button>';
    echo '</form>';
}

formulario("Ex01", 4);
