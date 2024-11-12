<?php
$servername = "localhost";
$username = "root"; // substitua pelo seu usuário
$password = ""; // substitua pela sua senha
$dbname = "advocacia"; // substitua pelo nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
