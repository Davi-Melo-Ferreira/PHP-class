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
        echo "<strong>Média:</strong>" . number_format($media, 2, ',', '.' . "<br>");
    }
    if ($media < 4){
        echo"<br><strong>NA</strong>- Aluno Reprovado<br>";
    } else if($media < 6){
        echo"<br><strong>PA</strong>- Aluno Parcialmente Aprovado<br>";
    } else{
        echo"<br><strong>A</strong>- Aluno Aprovado<br>";
    }
}
?>