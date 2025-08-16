<?php
include "conexao.php";

$sql = "SELECT c.id, c.nome, c.email, v.titulo AS vaga
        FROM candidatos c
        JOIN vagas v ON c.vaga_id = v.id
        ORDER BY c.id DESC";
$result = $conexao->query($sql);

$candidatos = [];
while ($row = $result->fetch_assoc()) {
    $candidatos[] = $row;
}

header("Content-Type: application/json");
echo json_encode($candidatos);
?>