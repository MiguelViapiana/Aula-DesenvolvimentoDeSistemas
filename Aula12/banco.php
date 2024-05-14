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


    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";

        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo var_dump($resp);
    }

    // criarUsuario("Rober10", "roberto", "111");
    // criarUsuario("Maria_22", "maria", "senha");
    // criarUsuario("clarinha_ofc", "clara", "senha2");

    function alterarSenha($novaSenha, $usuario){
        global $banco;
        $novaSenha = password_hash('nova-senha', PASSWORD_DEFAULT);

        $q = "UPDATE usuarios SET senha='$novaSenha' WHERE usuario = '$usuario'";

        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo var_dump($resp);

    }

    function deletarUsuario($usuario){
        global $banco;
        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";

        $resp = $banco->query($q);
        echo "<br> Query:  $q";
        echo var_dump( $resp);
    }
    
?>
</pre>