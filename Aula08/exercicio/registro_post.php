<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro de Usuário</h1>
    <form action="resposta.php" method="get">

        <label for="">Nome: </label>
        <input type="text" name="nome" id="">

        <label for="">Email: </label>
        <input type="email" name="email" id="">

        <label for="">Senha: </label>
        <input type="number" name="senha" id="">

        <input type="submit" value="Enviar">

    </form>
</body>
<?php
    include "funcoes.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(validarNome($nome) && validarEmail($email) && validarSenha($senha)){
        header("Location: suscesso.php");
        exit();
    }else{
        header("Location: erro.php?mensagem=Preencha todos os campos corretamente.");
        exit();
    }

?>

</html>