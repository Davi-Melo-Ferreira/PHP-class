<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Adivinhe o Número</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form method="POST">
            <?php
                session_start();
                if (isset($_POST['number']) && !empty($_POST['number'])) {
                    $number = (int) $_POST['number'];
                    $numeroSorteado = rand(1, 100);
                    if (!isset($_SESSION['tentativas'])) {
                        $_SESSION['tentativas'] = 0;
                    }
                    if ($number == $numeroSorteado){
                        echo "<h1>Acertou</h1><br>";
                        echo"" . htmlspecialchars($_SESSION['tentativas']) ." Tentativas</strong><br>";
                        session_destroy();
                    } else{
                        $_SESSION['tentativas']++;
                        echo"<h1>Errou</h1><br>";
                        echo"" . htmlspecialchars($_SESSION['tentativas']) ." Tentativas</strong><br>";
                    }
                }
            ?>
            <input type="number" name="number" placeholder="Digite um número" required><br>
            <input type="submit" name="button">
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>

