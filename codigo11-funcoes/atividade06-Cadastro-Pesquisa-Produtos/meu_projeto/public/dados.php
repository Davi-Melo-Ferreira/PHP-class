<?php

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

function cadastrar($nome, $preco) {
    $_SESSION['produtos'][] = [
        "nome" => $nome,
        "preco" => $preco
    ];
}

function listar() {
    if (!empty($_SESSION['produtos'])) {
        echo '<h1>Produtos cadastrados:</h1>';
        foreach ($_SESSION['produtos'] as $produto) {
            echo '<p>Nome: ' . htmlspecialchars($produto['nome']) . ' | Preço: ' . htmlspecialchars($produto['preco']) . '</p>';
        }
    } else {
        echo '<p>Nenhum produto cadastrado.</p>';
    }
}

function pesquisar($nome) {
    foreach ($_SESSION['produtos'] as $produto) {
        if (strpos($produto['nome'], $nome) !== false) {
            echo '<p>Nome: ' . htmlspecialchars($produto['nome']) . ' | Preço: $' . htmlspecialchars($produto['preco']) . '</p>';
        } else{
            echo '<p>Nenhum produto cadastrado com esse nome ou Nome digitado incorretamente!.</p>';
        }
    }
}
?>
