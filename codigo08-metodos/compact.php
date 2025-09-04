<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    <header>
        <h1>Extraíndo criando um array: compact()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1- Extract</h2>';

            $nome = 'Maria';
            $idade = 40;
            $peso = 50.5;

            $array = compact('nome', 'idade', 'peso');

            echo "<pre>";
            print_r($array);
            echo "</pre>";
        ?>
    </main>
</body>

</html>