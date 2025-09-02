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
    <h1>Calculadora: Operadores Aritméticos</h1>

    <form id="meuFormulario" method="POST" action="processa.php">
        <label>Digite o primeiro número:</label><br>

        <input type="number" id="entrada1" name="numero1" placeholder="Ex: 1" required><br>

        <label>Digite o segundo número:</label><br>

        <input type="number" id="entrada2" name="numero2" placeholder="Ex: 2" required><br>

        <label>Escolha a operação:</label><br>

        <select name="opcoes" id="opcoes">
            <option value="soma">+(soma)</option>
            <option value="subtracao">-(subtracao)</option>
            <option value="multiplicacao">*(multiplicacao)</option>
            <option value="divisao">/(divisao)</option>
        </select>
        
        <button type="submit">Enviar</button>
    </form>

    <script src="js/script.js"></script>
</body>

</html>