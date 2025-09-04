<?php

echo '<h2> 1- Extract</h2>';

$alunos = [
    'nome' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 10,
    'Nota3' => 10,
    'Nota4' => 10,
];

echo "<pre>";
print_r($alunos);
echo "</pre>";

$soma_notas = 0;

foreach ($alunos as $chave => $valor){
    if(is_numeric($valor)){
        $soma_notas += valor;
    }
}

echo "<pre>";
print_r("Soma de Notas: " . $soma_notas);
echo "</pre>";
?>