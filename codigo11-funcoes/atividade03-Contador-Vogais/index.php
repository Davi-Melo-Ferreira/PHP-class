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
        <h1>Tabuada</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form method="POST">
            <label>Digite uma Palavra:</label><br>
            <input type="text" name="word" required>
            <input type="submit" name="button">
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>

    <?php
        include "meu_projeto/public/calcular.php";
        session_start();
                if (isset($_POST['word']) && !empty($_POST['word'])) {
                    $word = $_POST['word'];
                    echo "<h1>Quantidade de Cada Vogal:</h1><br>";
                    echo calcular($word);
                }
    ?>
</body>

</html>

