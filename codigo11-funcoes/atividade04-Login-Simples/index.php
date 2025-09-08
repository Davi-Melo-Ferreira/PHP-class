<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <form method="post">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="text" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
        session_start();
        if(isset($_SESSION['usuario']) && !empty(isset($_SESSION['usuario']))){

        }
    ?>
    
    <?php
        $usuarios = [
            ['usuario' => 'joão', 'senha' => '1234', 'nome' => 'João da Silva'],
            ['usuario' => 'maria', 'senha' => 'abcd', 'nome' => 'Maria Oliveira']
        ];
    ?>
</body>

</html>

