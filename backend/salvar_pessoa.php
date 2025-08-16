<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $vaga_id = $_POST['vaga_id'];

    $sql = "INSERT INTO candidatos (nome, email, vaga_id) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssi", $nome, $email, $vaga_id);

    if ($stmt->execute()) {
        header("Location: ../index.html");
        exit;
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>