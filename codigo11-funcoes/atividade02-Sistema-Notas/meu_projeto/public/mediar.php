<?php
function mediar ($estudante){
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
?>