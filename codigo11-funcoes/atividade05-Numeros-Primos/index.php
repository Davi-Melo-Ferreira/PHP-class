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
        <h1>Números Primos</h1>
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
    include "meu_projeto/public/verificar.php";
    session_start();
    if (isset($_POST['number']) && !empty($_POST['number'])) {
        $number = (float) $_POST['number'];
        $verificacao = verificar($number);
        echo "<h1>Números Primos Antecessores de $number:</h1>";
        
        if ($verificacao= true){
            for ($i = 0; $i < $number + 1; $i++) {
                $iteracao = verificar($i);
            }
        }
        
    }
    ?>
</body>

</html>