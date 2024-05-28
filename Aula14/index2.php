<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "banco.php";
    require "funcoes.php";

    $u = $_POST['usuario'] ?? null;
    $s = $_POST['senha'] ?? null;

    if(is_null($u) || is_null($s)){
        echo "<h1>Tela de Login</h1>";
        formulario("post", "usuario", "senha");
    }else{
        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$u'";

        $busca = $banco -> query($q);
        print_r($busca);
        if($busca -> num_rows > 0){
            $usu = $busca->fetch_object();
            if(password_verify($s, $usu->senha)){
                echo "<br>Login :)";

                echo "<br><a href=\"atualizar.php\"><input type =\"submit\" name=\"atualizar\" value=\"Atualizar\"></a>";
                echo "<br><a href=\"deletar.php\"><input type =\"submit\" name=\"deletar\" value=\"Deletar\"></a>";

            }else{
                formulario("post", "usuario", "senha");
                echo "<br>Senha inválida :C";
                
            }
        }else{
            echo "<h1>Tela de Login</h1>";
            formulario("post", "usuario", "senha");
        }

        
    }


    ?>
</body>
</html>


