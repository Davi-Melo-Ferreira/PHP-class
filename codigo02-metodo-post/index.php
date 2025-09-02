<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h1>Envie sua mensagem</h1>

    <form method="POST" action="processa.php">
        <label>Digite sua mensagem:</label><br>

        <input type="text" name="mensagem" required>
        
        <button type="submit">Enviar</button>
    </form>

    <script src="js/script.js"></script>
</body>

</html>