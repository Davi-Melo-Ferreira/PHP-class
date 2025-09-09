<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Login Simples</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form method="POST">
            <label>Usuário</label>
            <input type="text" name="usuario">
            <label>Senha</label>
            <input type="password" name="senha" >
            <input type="submit" name="enviar">
        </form>
        <?php
            session_start();
            require "meu_projeto/public/usuarios.php";
            require "meu_projeto/public/verificar.php";
            if (!isset($_SESSION['contador'])) {
                $_SESSION['contador'] = 3;
            }
            if (isset($_POST['enviar'])){
                if(!empty($_POST["usuario"]) && !empty($_POST["senha"])){
                    $_SESSION["usuario"] = $_POST["usuario"];
                    $_SESSION["senha"] = $_POST["senha"];
                    
                        if (verificar($usuarios) == false) {
                            $_SESSION['contador']--;
                            if ($_SESSION['contador'] > 0) {
                                echo "Usuário ou senha inválidos! Você tem mais " . $_SESSION['contador'] . " tentativas.";
                            } else {
                                session_destroy();
                                header("Location: meu_projeto/public/banido.php");
                                exit;
                            }
                        }
                    }
                }
            
        ?>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>