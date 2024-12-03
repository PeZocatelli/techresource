<?php
function cadastrarUsuario($pdo, $nome_completo, $email, $telefone, $cidade, $senha) {
    // Verifica se o email já está cadastrado
    $sql = "SELECT * FROM usuarios WHERE email = :email";
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
        $sqlInsert = "INSERT INTO cadastros (nome_completo, email, telefone, area_de_atuacao	
, senha) 
                      VALUES (:nome_completo, :email, :telefone, area_de_atuacao	
, :senha)";
        $stmtInsert = $pdo->prepare($sqlInsert);
        $stmtInsert->bindParam(':nome_completo', $nome_completo);
        $stmtInsert->bindParam(':email', $email);
        $stmtInsert->bindParam(':telefone', $telefone);
        $stmtInsert->bindParam(':area de atuacao', $area_de_atuacao);
        $stmtInsert->bindParam(':senha', $senhaHash);
        
        if ($stmtInsert->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário.";
        }
    }
}
?>
