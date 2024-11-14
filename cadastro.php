<?php
require_once 'conexao.php';
require_once 'funcaoCadastro.php'; // Inclui a função apenas uma vez

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
        // Chama a função de cadastro, passando os dados
        cadastrarUsuario($pdo, $nome_completo, $email, $telefone, $cidade, $senha);
    } else {
        echo "As senhas não coincidem.";
    }
}
?>
