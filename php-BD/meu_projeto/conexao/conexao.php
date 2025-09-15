<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "davi_tarefas_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("ERRO na conexão: " . $conn->connect_error);
}
?>