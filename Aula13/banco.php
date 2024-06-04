<pre>
<?php

    $banco = new mysqli("localhost:3307", "root", "", "migasdatabase");
    //echo var_dump($banco);
    // echo print_r($banco);

    // echo "<br><br>------------------------------<br><br>";
    // $busca = $banco-> query("SELECT * FROM usuarios");
    // echo print_r($busca);

    // echo "<br><br>------------------------------<br><br>";
    // while($obj = $busca->fetch_object()){
    //     echo print_r($obj);
    // }

    // echo "<br><br>------------------------------<br><br>";

    // $busca = $banco -> query("SELECT cod, usuario, nome, senha FROM usuarios WHERE usuario='miggas'");
    // $usu = $busca->fetch_object();
    // echo print_r($usu);

    // echo "<br>C: ". $usu->cod;
    // echo "<br>U: ". $usu->usuario;
    // echo "<br>S: ". $usu->senha;
    // echo "<br>N: ". $usu->nome;

    //password_hash("abc", PASSWORD_DEFAULT);

    function createOnDb($into, $values){
        global $banco;
        // Modificamos a construção da query para garantir que as colunas sejam especificadas
        
        $q = "INSERT INTO $into SET $values";
    
        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo var_dump($resp);
    }


    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        createOnDb("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");
        //$q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";

        // $resp = $banco->query($q);
        // echo "<br> Query: $q";
        // echo var_dump($resp);
    }

     //criarUsuario("miggas", "Miguel", "123");
     //criarUsuario("Maria_22", "maria", "senha");
     //criarUsuario("clarinha_ofc", "clara", "senha2");

    function alterarSenha($novaSenha, $usuario){
        global $banco;
        $novaSenha = password_hash('nova-senha', PASSWORD_DEFAULT);

        $q = "UPDATE usuarios SET senha='$novaSenha' WHERE usuario = '$usuario'";

        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo var_dump($resp);

    }

    function deletarUsuario($usuario, $debug=false){
        global $banco;
        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";


        $resp = $banco->query($q);
        echo "Usuário deletado!!";
        if ($debug) {
            echo "<br> Query: $q";
            echo var_dump($resp);
        }
    }
  
    //deletarUsuario("miggas");
    
    function atualizarUsuario($usuario, $nome, $senha, $debug=false){

        global $banco;
        $set = "";
        if($nome != "" & $senha != ""){
            echo "Nome e senha alterados!!";
            $novaSenha = password_hash('nova-senha', PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$novaSenha'";
        }else if($nome != ""){
            echo "Nome alterado!!";
            $set = "nome='$nome'";
        }else if($senha != ""){

            echo "Senha alterada!!";
            $novaSenha = password_hash('nova-senha', PASSWORD_DEFAULT);
            $set = "senha='$novaSenha'";
        }else{
            echo "Nada alterado!!";
            return;
        }

        $novaSenha = password_hash('nova-senha', PASSWORD_DEFAULT);

        $q = "UPDATE usuarios SET $set WHERE usuario = '$usuario'";

        $resp = $banco->query($q);

        if ($debug) {
            echo "<br> Query: $q";
            echo var_dump($resp);
        }
    }

    //atualizarUsuario("maria_22", "ma", "123");
?>
</pre>