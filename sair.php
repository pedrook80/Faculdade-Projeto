<?php
    session_start();   
    unset(
        $_SESSION['email'],
        $_SESSION['senha'],
        $_SESSION['nome']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: login.php");
