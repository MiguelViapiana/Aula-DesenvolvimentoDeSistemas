<?php 

function formulario($metodo, ...$form){
    echo "<form action=\"\" method=\"$metodo\">";
    foreach($form as $campo){
        echo "<label for='{$campo}'>".ucfirst($campo)."</label>";
        echo "<input type='text' name='{$campo}' id='num'><br>";
    } 
    echo '<input type="submit" value="Enviar">';
    echo "</form>";
}

?>