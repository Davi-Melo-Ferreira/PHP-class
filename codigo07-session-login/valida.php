<?php
session_start();
require 'usuarios.php';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

$login_valido = false;
$nome_usuario = '';

foreach ($usuarios as $u){
    if ($u['usuario'] === $usuario && $u['senha'] === $senha){
        $login_valido = true;
        $nome_usuario = $u['nome'];
        break;
    }
}
if ($login_valido){
    session_regenerate_id(true);

    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $nome_usuario;
    $_SESSION['ultimo_acesso'] = time();

    header("Location: restrita.php");
    exit();
} else{
    $_SESSION['erro'] = "Usuário ou senha inválidos!";
    header("Location: login.php");
    exit();
}

?>