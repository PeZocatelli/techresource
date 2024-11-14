<?php
function cadastrarUsuario($pdo, $email, $senha) {
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    // Alterando a tabela de 'usuarios' para 'cadastros'
    $stmt = $pdo->prepare("INSERT INTO cadastros (email, senha) VALUES (:email, :senha)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaCriptografada);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>
