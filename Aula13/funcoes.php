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
    echo "<form action\"/Aula13/index2.php\" method = \"post\">";
    echo "<label for \"voltar\">Voltar</label>";
    echo "<input type =\"submit\" name=\"voltar\" value =\"Voltar\"><br> ";
    echo "</form>";
}

function formularioAtualizar(){
    echo "<form action=\"\" method=\"post\">";
    echo "<label for='usuario'>Usuario: </label>";
    echo "<input type='text' name='usuario' id='num'><br>";
    echo "<label for='nome'>Nome: </label>";
    echo "<input type='text' name='nome' id='num'><br>";
    echo "<label for='senha'>Senha: </label>";
    echo "<input type='text' name='senha' id='num'>";
    echo '<input type="submit" value="Enviar">';
    echo "</form>";
}

function formularioDeletar(){
    echo "<form action=\"\" method=\"post\">";
    echo "<label for='usuario'>Usuario: </label>";
    echo "<input type='text' name='usuario' id='num'>";
    echo '<input type="submit" value="Enviar">';
    echo "</form>";
}


?>