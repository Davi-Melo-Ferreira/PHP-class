<?php
// pega os dados enviados convertendo em json
header("Content-Type: application/json");
include("../conexao/conexao.php");

// lê os dados enviados pelo front-end
$dados = json_decode(file_get_contents("php//input"), true);

$id = (int)$dados["id"];
$concluida = (int)$dados["concluida"];

$sql = "UPDATE tarefas SET concluida = $concluida WHERE id = $id";
$concluida = (int)$dados["concluida"];
$conn->query($sql);

echo json_encode(["status" => "ok"]);
?>