<?php
require_once 'conexao.php';
require_once 'funcaoCadastro.php'; // Inclui a função apenas uma vez

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pega os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmarSenha) {
        cadastrarUsuario($pdo, $email, $senha);
    } else {
        echo "As senhas não coincidem.";
    }
}
?>
