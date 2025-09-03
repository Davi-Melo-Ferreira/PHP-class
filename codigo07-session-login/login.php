<?php
session_start();

if (isset($_SESSION['usuario'])){
    header("Location: restrita.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <?php if (isset($_SESSION['erro'])): ?>
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
    <?php endif; ?>

    <form action="valida.php" method="post">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="text" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>

</html>