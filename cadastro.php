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
        // Chama a função de cadastro, passando os dados
        if (cadastrarUsuario($pdo, $nome_completo, $email, $telefone, $cidade, $senha)) {
            // Redireciona para login.php se o cadastro for bem-sucedido
            echo "<script>
                    alert('Cadastro realizado com sucesso!');
                    window.location.href = 'login.php';
                  </script>";
            exit;
        } else {
            echo "<script>alert('Erro ao cadastrar o usuário.');</script>";
        }
    } else {
        echo "<script>alert('As senhas não coincidem.');</script>";
    }
}
?>
