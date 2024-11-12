<?php
// Conexão com o banco de dados
$host = '127.0.0.1';
$user = 'root'; // Substitua pelo seu usuário
$password = ''; // Substitua pela sua senha
$dbname = 'advocacia';

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Buscar todos os advogados
$sql = "SELECT id, nome, foto_perfil, descricao_breve FROM advogados";
$result = $conn->query($sql);

// Fechar conexão após a consulta
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Advogados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .advogado-card {
            display: inline-block;
            width: 30%;
            margin: 1%;
            background-color: #800000;
            color: #fff;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .advogado-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .advogado-card h3 {
            margin: 10px 0;
        }
        .advogado-card p {
            font-size: 14px;
            margin: 10px 0;
        }
        .advogado-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #fff;
            color: #800000;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .advogado-card a:hover {
            background-color: #b22222;
            color: #fff;
        }
        @media (max-width: 768px) {
            .advogado-card {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .advogado-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Advogados</h1>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="advogado-card">
                    <img src="<?= htmlspecialchars($row['foto_perfil'] ?? 'default.jpg') ?>" alt="Foto de <?= htmlspecialchars($row['nome']) ?>">
                    <h3><?= htmlspecialchars($row['nome']) ?></h3>
                    <p><?= htmlspecialchars($row['descricao_breve']) ?></p>
                    <a href="perfil.php?id=<?= $row['id'] ?>">Saiba Mais</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum advogado encontrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
