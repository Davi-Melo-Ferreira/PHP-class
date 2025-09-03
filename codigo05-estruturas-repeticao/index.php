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
    <!--Cabeçalho do Site-->
    <header>
        <h1>Exemplo de Estruturas de Repetição em PHP</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <section>
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    include "processa.php";
                    exibirFor();
                ?>
            </div>
        </section>

        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    exibirWhile();
                ?>
            </div>
        </section>

        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>

    <!--Rodapé da página-->
    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>

    <!--Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>

</html>