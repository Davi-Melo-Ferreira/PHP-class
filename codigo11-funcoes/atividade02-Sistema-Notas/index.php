<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="meu_projeto/public/css/style.css">
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
    include "meu_projeto/public/mediar.php";
        if (isset($_SESSION['alunos']) && !empty($_SESSION['alunos'])) {
            foreach ($_SESSION['alunos'] as $estudante) {
               mediar($estudante); 
            }
        }
    ?>
</body>
</html>

