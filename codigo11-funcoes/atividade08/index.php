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
            <label>Digite um Número:</label><br>
            <input type="number" name="number" required>
            <input type="submit" name="button">
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>

    <?php
        include "meu_projeto/public/tabuar.php";
        session_start();
                if (isset($_POST['number']) && !empty($_POST['number'])) {
                    $number = (float) $_POST['number'];
                    echo "<h1>Resultado:</h1>";
                    echo tabuar($number);
                }
    ?>
</body>

</html>

