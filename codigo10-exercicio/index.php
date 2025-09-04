<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        input[type="text"], input[type="number"]{
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px;
        }
        input[type="submit"]{
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>

<?php
session_start();

if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['limpar_lista'])) {
        session_destroy();
        header("Location: index.php");
        exit;
    } 
    else if (isset($_POST['adicionar_aluno'])) {
            $aluno = [
                'nome' => $_POST['nome'],
                'Nota1' => (float) $_POST['nota1'],
                'Nota2' => (float) $_POST['nota2'],
                'Nota3' => (float) $_POST['nota3'],
                'Nota4' => (float) $_POST['nota4'],
            ];
            $_SESSION['alunos'][] = $aluno;
        }
    }
?>

<body>
    <header>
        <h1>Cadastro de aluno</h1>
    </header>

    <form method="POST">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome" required>

        <br><label>Nota 1:</label><br>
        <input type="number" name="nota1" step="0.1" required>
        <br><label>Nota 2:</label><br>
        <input type="number" name="nota2" step="0.1" required>
        <br><label>Nota 3:</label><br>
        <input type="number" name="nota3" step="0.1" required>
        <br><label>Nota 4:</label><br>
        <input type="number" name="nota4" step="0.1" required><br>

        <input type="submit" name="adicionar_aluno" value="Adicionar Aluno">
        <input type="submit" name="limpar_lista" value="limpar Lista" formnovalidate>
    </form>

    <?php
        if (isset($_SESSION['alunos']) && !empty($_SESSION['alunos'])) {
        foreach ($_SESSION['alunos'] as $estudante) {
            $soma_notas = 0;
            $qntd_notas = 0;

            echo "<hr>";
            echo "<h2>Resultado:</h2>";
            echo "<h3>Aluno: " . htmlspecialchars($estudante['nome']) . "</h3>";

            foreach ($estudante as $chave => $valor) {
                if ($chave !== 'nome' && is_numeric($valor)) {
                    echo "$chave: $valor<br>";
                    $soma_notas += $valor;
                    $qntd_notas++;
                }
            }

            if ($qntd_notas > 0) { //evita divisão por zero
                $media = $soma_notas / $qntd_notas;
                echo "<br><strong>Soma das Notas: </strong> $soma_notas<br>";
                echo "<strong>Média:</strong>" . number_format($media, 2, ',', '.');
            }
        }
    }
    ?>
</body>
</html>