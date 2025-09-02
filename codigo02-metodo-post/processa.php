<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <h1>Resultado:</h1>

    <p>
        <?php
        if(isset($_POST['mensagem'])){
            $mensagem = htmlspecialchars($_POST['mensagem']);
            echo "Você digitou: <strong>$mensagem</strong>";
        } else{
            echo "Nenhuma mensagem foi recebida.";
        }
        ?>
    </p>

    <a href="index.php">Voltar</a>
</body>

</html>