<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        include "funcoes.php";
        $logado = $_SESSION['logado'] ?? false;

        if($logado == false){
            if(!isset($_POST['usuario']) && !isset($_POST['senha'])) {
            formulario("post", "usuario", "senha");
            
            }
            require_once "usuario.php";
     
            $usuario = $_POST['usuario'] ?? null;
            $senha = $_POST['senha'] ?? null;

            if(is_null($usuario) && is_null($senha)){
                echo "Fazer login";
            }else{
                if(verUsuarios($usuario, $senha)){
                    echo "-- Fazendo Login: --";
                    echo "<br>Bem Vindo!!";
                    $_SESSION['logado'] = true;
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['senha'] = $senha;

                }else{
                    formulario("post", "usuario", "senha");
                    echo "[ERRO] usuario ou senha não encontrado!!";
                }
            } 
        }else{
            $usuario = $_SESSION['usuario'];
            $senha = $_SESSION['senha'];
            echo "<br>Bem Vindo $usuario!!";
            voltarLogin();
            if (isset($_POST['voltar'])) {
                $_SESSION["logado"] = false;
                exit();
            }
        }
                


        
        
    ?>
</body>
</html>