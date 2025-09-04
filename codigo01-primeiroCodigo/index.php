<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu First PHP</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }
        input, button {
            padding: 8px; margin: 5px;
        }
    </style>

</head>

<body>
    <h1>Bem vindo ao PHP</h1>

    <!--Container para o conteúdo-->
    <main>
        <form method="GET" action="">
            <label>Digite sua mensagem</label><br>

            <input type="text" name="mensagem" required>

            <button type="submit">Enviar</button>
        </form>
        <p>
            <?php
                if (isset($_GET['mensagem'])){
                    $mensagem = htmlspecialchars($_GET['mensagem']);

                    echo "Você digitou: <strong>$mensagem</strong>";
                } else{
                    echo "Olá, mundo! Este é meu primeiro código em PHP";
                }
            ?>
        </p>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>

</html>