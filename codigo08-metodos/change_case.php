<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    <header>
        <h1></h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1- Extract</h2>';

            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            echo "<pre>";
            print_r($array);
            echo "</pre>";

            $indice_minusculo = array_change_key_case($array, CASE_LOWER);

            echo "<pre>";
            echo "Índice Minúsculo <br>";
            print_r($indice_minusculo);
            echo "</pre>";

            $indice_maiusculo = array_change_key_case($array, CASE_UPPER);

            echo "<pre>";
            echo "Índice Minúsculo <br>";
            print_r($indice_maiusculo);
            echo "</pre>";
        ?>
    </main>
</body>

</html>