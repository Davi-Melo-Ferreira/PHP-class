<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="meu_projeto/public/css/style.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Conversor de Grau</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form method="POST">
            <label>Escolha uma Temperatura</label><br>
            <input type="number" name="number" required>
            <select name="convertedor">
                <option value="Celsius">Celsius</option>
                <option value="Farenheit">Farenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select>

            <input type="submit" name="converter" value="Converter">
            <?php
                session_start();
                if(isset($_POST['number']) && isset($_POST['convertedor'])){
                    $_SESSION['number'] = $_POST['number'];
                    $_SESSION['convertedor'] = $_POST['convertedor'];
                    switch($_SESSION['convertedor']){
                        case 'Celsius':
                            require 'meu_projeto/public/celsius.php';
                            calcularCelsius();
                            break;
                        case 'Farenheit':
                            require 'meu_projeto/public/farenheit.php';
                            calcularFarenheit();
                            break;
                        case 'Kelvin':
                            require 'meu_projeto/public/kelvin.php';
                            calcularKelvin();
                            break;
                    }
                }
            ?>
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>

