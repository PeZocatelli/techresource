<?php
<?php
require 'conexao.php';
echo "Conexão bem-sucedida!";
?>


function cadastrarUsuario($pdo, $nome, $email, $senha) {
    try {
        // Criação do hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Query de inserção
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);

        // Execução da query
        $stmt->execute();

        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        // Tratamento de erros
        echo "Erro ao cadastrar usuário: " . $e->getMessage();
    }
}

?>
