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
        if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['opcoes'])){
            $numero1 = htmlspecialchars($_POST['numero1']);
            $numero2 = htmlspecialchars($_POST['numero2']);
            $opcao = htmlspecialchars($_POST['opcoes']);

            if($opcao == "soma"){
                $valor = $numero1 + $numero2;
                echo "<strong> $numero1 + $numero2 = $valor </strong>";
            } else if($opcao == "subtracao"){
                $valor = $numero1 - $numero2;
                echo "<strong> $numero1 - $numero2 = $valor </strong>";
            } else if($opcao == "multiplicacao"){
                $valor = $numero1 * $numero2;
                echo "<strong> $numero1 * $numero2 = $valor </strong>";
            } else if($opcao == "divisao"){
                $valor = $numero1 / $numero2;
                echo "<strong> $numero1 / $numero2 = $valor </strong>";
            }
        }
        ?>
    </p>

    <a href="index.php">Voltar</a>
</body>

</html>