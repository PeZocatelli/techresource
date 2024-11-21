<?php
require 'conexao.php';

function cadastrarUsuario($pdo, $nome_completo, $email, $telefone, $cidade, $senha) {
    // Verifica se o email já está cadastrado
    $sql = "SELECT * FROM cadastros WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuarioExistente) {
        echo "Este e-mail já está registrado.";
    } else {
        // Criptografa a senha
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        
        // Insere o novo usuário no banco de dados, incluindo os novos campos
        $sqlInsert = "INSERT INTO cadastros (nome_completo, email, telefone, cidade, senha) 
                      VALUES (:nome_completo, :email, :telefone, :cidade, :senha)";
        $stmtInsert = $pdo->prepare($sqlInsert);
        $stmtInsert->bindParam(':nome_completo', $nome_completo);
        $stmtInsert->bindParam(':email', $email);
        $stmtInsert->bindParam(':telefone', $telefone);
        $stmtInsert->bindParam(':cidade', $cidade);
        $stmtInsert->bindParam(':senha', $senhaHash);
        
        if ($stmtInsert->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário.";
        }
    }
}


?>


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="illustration">
            <img src="https://img.freepik.com/premium-photo/scales-law-justice-concept_863013-164008.jpg" alt="Ilustração estudante">
        </div>
        <div class="login-box">
            <h2>CADASTRO DO CLIENTE</h2>
            <form method="POST" action="cadastro.php">
                <div class="input-group">
                    <label for="nome_completo">Nome completo:</label>
                    <input type="text" id="nome_completo" name="nome_completo" placeholder="Digite seu nome completo" required>
                </div>
                <div class="input-group">
                    <label for="email">Digite seu e-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
                </div>
                <div class="input-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
                </div>
                <div class="input-group">
                    <label for="senha">Digite sua senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="input-group">
                    <label for="confirmar_senha">Confirme sua senha:</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="register-btn">CADASTRAR</button>
            </form>
            <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
        </div>
    </div>
</body>
</html>
