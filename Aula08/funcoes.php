<?php

function formulario($metodo, ...$form){
    echo "<form action=\"resp.php\" method=\"$metodo\">";
    foreach($form as $campo){
        $campo = ucfirst($campo);
        echo "<label for='{$campo}'>$campo</label>";
        echo "<input type='text' name='{$campo}' id='num'><br>";
    } 
    echo '<input type="submit" value="Enviar">';
    echo "</form>";
}

?>