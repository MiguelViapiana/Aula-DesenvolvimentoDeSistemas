<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "funcoes.php";
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
            }else{
                formulario("post", "usuario", "senha");
                echo "[ERRO] usuario ou senha não encontrado!!";
            }
        } 
    ?>
</body>
</html>