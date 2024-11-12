<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $especialidade = $_POST['especialidade'];
    $descricao = $_POST['descricao'];

    // Verifica se uma imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        $nomeArquivo = uniqid() . '-' . basename($_FILES['imagem']['name']);
        $destino = 'uploads/' . $nomeArquivo;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
            $sql = "INSERT INTO perfil_advogado (nome, email, telefone, endereco, especialidade, descricao, imagem)
                    VALUES ('$nome', '$email', '$telefone', '$endereco', '$especialidade', '$descricao', '$nomeArquivo')";

            if ($conn->query($sql) === TRUE) {
                echo "Dados salvos com sucesso!";
            } else {
                echo "Erro ao salvar os dados: " . $conn->error;
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } else {
        echo "Nenhuma imagem foi enviada ou houve um erro no upload.";
    }

    $conn->close();
}
?>
