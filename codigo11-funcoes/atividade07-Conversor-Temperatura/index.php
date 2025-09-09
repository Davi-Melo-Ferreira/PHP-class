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
                if(isset($_POST['converter'])){
                    echo"<input type='text' value='$valor' disabled>";
                }
            ?>
            <select name="convertido">
                <option value="Celsius">Celsius</option>
                <option value="Farenheit">Farenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select>
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>

    <?php
        
                
    ?>
</body>

</html>

