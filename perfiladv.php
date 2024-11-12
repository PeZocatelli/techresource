<?php include 'db_connection.php';

include 'conexao.php'; // ou 'includes/conexao.php' se estiver em uma pasta
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Perfil do Advogado</title>
    <link rel="stylesheet" href="perfiladv.css">
</head>
<body>
    <div class="container">
        <h1>Criação de Perfil Profissional</h1>
        <p>Preencha as informações abaixo para que seu perfil seja exibido em nosso site. Certifique-se de incluir uma descrição clara sobre sua experiência profissional e especialidades.</p>
        
        <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Perfil do Advogado</title>
</head>
<body>
    <h2>Cadastro de Perfil do Advogado</h2>
    <form action="salvar_perfil.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco"><br><br>

        <label for="especialidade">Especialidade:</label>
        <input type="text" id="especialidade" name="especialidade"><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

    </div>
</body>
</html>
