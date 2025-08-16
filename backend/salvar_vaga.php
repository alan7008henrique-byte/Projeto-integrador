<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO vagas (titulo, descricao, salario) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssd", $titulo, $descricao, $salario);

    if ($stmt->execute()) {
        header("Location: ../index.html");
        exit;
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>