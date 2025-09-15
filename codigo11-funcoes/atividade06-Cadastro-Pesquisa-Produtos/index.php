<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="meu_projeto/public/css/style.css">
</head>

<body>
    <!--Cabeçalho do Site-->
        <header>
            <h1>Cadastro de Produto</h1>
        </header>
    <!--Container para o conteúdo-->
    <main>
        <form method="POST">
            <h1>Cadastro de Produtos</h1>
            <label>Nome do Produto:</label>
            <input type="text" name="nome" required><br>
            
            <label>Valor do produto:</label>
            <input type="number" name="valor" required><br>

            <input type="submit" name="enviar" value="cadastrar">
            <input type="submit" name="apagar" value="limpar_produtos" formnovalidate>
            <input type="submit" name="listar" value="listar_produtos" formnovalidate>
            <input type="text" name="procurar_nome" placeholder="Nome do Produto...">
            <input type="submit" name="procurar" value="procurar" formnovalidate>
        </form>
        
        <?php
            session_start();
            require "meu_projeto/public/dados.php";
            if (!isset($_SESSION['produtos'])) {
                $_SESSION['produtos'] = [];
            }

            if (isset($_POST['apagar'])) {
                session_destroy();
                header("Location: index.php");
                exit;
            } else if (isset($_POST['nome'], $_POST['valor'], $_POST['enviar'])) {
                cadastrar($_POST['nome'], $_POST['valor']);
            } else if (isset($_POST['procurar']) && isset($_POST['procurar_nome']) && !empty($_POST['procurar_nome'])) {
                pesquisar($_POST['procurar_nome']);
            } else if (isset($_POST['listar'])) {
                listar();
            } else if (isset($_POST['procurar_nome'])) {
                pesquisar($_POST['procurar_nome']);
            }
        ?>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>