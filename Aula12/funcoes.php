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

function voltarLogin(){
    echo "<form action\"\" method = \"post\">";
    echo "<label for \"voltar\">Voltar</label>";
    echo "<input type =\"submit\" name=\"voltar\" value =\"Voltar\"><br> ";
    echo "</form>";
}


?>