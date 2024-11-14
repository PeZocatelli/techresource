<?php
// conexao.php
$host = 'localhost';
$dbname = 'advocacia'; // Nome do banco de dados
$user = 'root';
$password = ''; // Senha em branco

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

?>