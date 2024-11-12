<?php
// Conexão com o banco de dados
$host = '127.0.0.1';
$user = 'root'; // Substitua pelo usuário do seu banco de dados
$password = ''; // Substitua pela sua senha
$dbname = 'advocacia';

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter o ID do advogado (exemplo: ?id=1)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Buscar dados do advogado
$sql = "SELECT * FROM advogados WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Verificar se o advogado foi encontrado
if ($result->num_rows > 0) {
    $advogado = $result->fetch_assoc();
} else {
    echo "Advogado não encontrado.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Advogado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .perfil-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .foto {
            float: left;
            margin-right: 20px;
        }
        .foto img {
            max-width: 150px;
            border-radius: 50%;
        }
        .info {
            overflow: hidden;
        }
        .info h2 {
            color: #800000;
        }
        .descricao {
            margin-top: 20px;
        }
        .redes-sociais img {
            width: 30px;
            margin-right: 10px;
        }
        .container {
            padding: 50px;
        }
        button {
            padding: 15px 30px;
            background-color: #800000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #b22222;
        }
    </style>
</head>
<body>
    <div class="perfil-container">
        <div class="foto">
            <img src="<?= htmlspecialchars($advogado['foto_perfil'] ?? 'default.jpg') ?>" alt="Foto de <?= htmlspecialchars($advogado['nome']) ?>">
        </div>
        <div class="info">
            <h2><?= htmlspecialchars($advogado['nome']) ?></h2>
            <p><strong>Email:</strong> <?= htmlspecialchars($advogado['email']) ?></p>
            <p><strong>Telefone:</strong> <?= htmlspecialchars($advogado['phone']) ?></p>
        </div>
        <div class="descricao">
            <h3>Descrição</h3>
            <p><?= nl2br(htmlspecialchars($advogado['descricao_completa'])) ?></p>
        </div>
        <div class="redes-sociais">
            <a href="<?= htmlspecialchars($advogado['instagram']) ?>" target="_blank"><img src="instagram.png" alt="Instagram"></a>
            <a href="<?= htmlspecialchars($advogado['linkedin']) ?>" target="_blank"><img src="linkedin.png" alt="LinkedIn"></a>
        </div>
        <div class="container">
        <h1>Criar ou Editar Perfil</h1>
        <form action="salvar_perfil.php" method="post">
            <input type="text" name="nome" placeholder="Nome do Advogado" required><br><br>
            <textarea name="descricao" placeholder="Descrição do Trabalho" required></textarea><br><br>
            <button type="submit">Salvar</button>
        </form>
    </div>
    </div>
</body>
</html>
