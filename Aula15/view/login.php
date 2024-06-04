<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <?php 
        require_once "header.php";
    
        session_start();
        
        $usu = $_SESSION["usuario"] ?? null;

        if(!is_null($usu)){
            // estou logado
            header("Location: lista.php");
        }else{

            require_once "banco-antigo.php";

            $usu = $_POST['usuario'] ?? null;
            $sen = $_POST['senha'] ?? null;

            if(is_null($usu) || is_null($sen)){
                
            }else{

                echo "~ [Usuario: $usu - Senha: $sen] ~ <br>";

                $busca = $banco->query("SELECT * FROM usuarios 
                WHERE usuario='$usu'");

                if($busca->num_rows == 0){
                    echo "<br> Usuário não existe";
                }else{
                    echo "<br> boa";
                    
                    $obj = $busca->fetch_object();
                    echo "<br>" . $obj->cod;
                    echo "<br>" . $obj->usuario;
                    echo "<br>" . $obj->nome;
                    echo "<br>" . $obj->senha;

                    if($sen === $obj->senha){
                    //if(password_verify($sen, $obj->senha)){
                        echo "<br> sucesso!";
                        $_SESSION["usuario"] = $usu;
                        $_SESSION["cod_usuario"] = $obj->cod;
                        header("Location: lista.php");
                    }else{
                        echo "<br> sem sucesso :/";
                    }

                }

                
            }
      }
    ?>

   <form action="" method="post">
        <label for="">Usuario:</label>
        <input type="text" name="usuario" value="">
        
        <label for="">Senha:</label>
        <input type="text" name="senha" value="">

        <input type="submit" value="Login">
    </form>
    
</body>
</html>