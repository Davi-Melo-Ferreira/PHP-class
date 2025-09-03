<?php
session_start();

if (!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if (time() - $_SESSION['ultimo_acesso'] > 30){
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['ultimo_acesso'] = time();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
</head>

<body>
    <h1>Bem vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>
    <p>Você está na área restrita</p>

    <p><a href="logout.php">Sair</a></p>
</body>

</html>