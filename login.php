<?php
require 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Chama a função de login
    realizarLogin($pdo, $email, $senha);
}

function realizarLogin($pdo, $email, $senha) {
    // Verifica se o email existe no banco
    $sql = "SELECT * FROM cadastros WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            echo "Login realizado com sucesso!";
            // Redireciona para a página inicial (inicio.html)
            header("Location: index.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "E-mail não cadastrado.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Cliente</title>
    <link rel="stylesheet" href="loginn.css">
</head>
<body>
    

    <div class="login-container">
        <div class="illustration">
            <img src="https://img.freepik.com/premium-photo/scales-law-justice-concept_863013-164008.jpg" alt="Ilustração estudante">
        </div>
        <div class="login-box">
            <h2>LOGIN DO CLIENTE</h2>
            <p>Entre com suas credenciais:</p>
            <form method="POST" action="login.php">
                <div class="input-group">
                    <label for="email">Digite seu e-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-group">
                    <label for="senha">Digite sua senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="login-btn">LOGIN</button>
            </form>
            <p>Não tem uma conta? <a href="inicioCadastro.php">Cadastre-se aqui</a></p>
        </div>
    </div>
</body>
</html>
