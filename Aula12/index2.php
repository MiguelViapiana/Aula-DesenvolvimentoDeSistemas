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
        
        formulario("post", "usuario", "senha");
    }else{
        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$u'";

        $busca = $banco -> query($q);
        print_r($busca);
        if($busca -> num_rows > 0){
            $usu = $busca->fetch_object();

            //if ($s === $usu->senha) {
            if(password_verify($s, $usu->senha)){
                echo "<br>Login :)";
            }else{
                formulario("post", "usuario", "senha");
                echo "<br>Senha inválida :C";
                
            }
        }else{
            formulario("post", "usuario", "senha");
        }

        
    }


    ?>
</body>
</html>


