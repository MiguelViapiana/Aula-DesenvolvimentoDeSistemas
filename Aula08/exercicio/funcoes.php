<?php

    function validarNome($nome){
        return preg_match('/^[a-zA-Z0-9]+$/', $nome);
    }

    function validarEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validarSenha($senha){
        return strlen($senha) >=6;
    }

?>