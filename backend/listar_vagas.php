<?php
include "conexao.php";

$sql = "SELECT * FROM vagas ORDER BY data_criacao DESC";
$result = $conexao->query($sql);

$vagas = [];
while ($row = $result->fetch_assoc()) {
    $vagas[] = $row;
}

header("Content-Type: application/json");
echo json_encode($vagas);
?>