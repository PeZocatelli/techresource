<?php
require_once 'conexao.php';
require_once 'funcaoCadastro.php'; // Inclui a função de cadastro

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pega os dados do formulário
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmarSenha) {
       
        
    } else {
        echo "<script>alert('As senhas não coincidem.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastroo.css">
</head>
<body>
    <div class="success-message">
        <h2>Cadastro realizado com sucesso!</h2>
        <p>Agora você pode acessar sua conta.</p>
        <button onclick="window.location.href='login.php';" class="login-button">Fazer Login</button>
    </div>
</body>
</html>
