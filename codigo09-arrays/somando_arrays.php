<?php

echo '<h2> 2- Dois alunos com 4 notas</h2>';

$alunos = [
    [
    'nome' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 9,
    'Nota3' => 8,
    'Nota4' => 10,
    ],
    [
    'nome' => 'João',
    'Nota1' => 7,
    'Nota2' => 8,
    'Nota3' => 6,
    'Nota4' => 9,
    ],

];

foreach ($alunos as $aluno){
    $nome = $aluno['nome'];

    $notas = array_slice($aluno, 1);
    $soma_notas = array_sum($notas);

    $media = $soma_notas / count($notas);

    echo "<h3>Aluno: $nome</h3>";
    echo "Notas: " . implode(', ' $notas) . "<br>";
    echo "Soma: $soma_notas<br>";

    echo "Média: " . number_format($media, 2, ',', '.') . "<hr>";
}
?>