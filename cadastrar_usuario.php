<?php
require 'conexao.php';

function cadastrarUsuario($pdo, $nome, $email, $senha) {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);
    $stmt->execute();

    echo "Usuário cadastrado com sucesso!";
}

// Exemplo de chamada
cadastrarUsuario($pdo, 'Exemplo Nome', 'exemplo@email.com', 'senha123');
?>
