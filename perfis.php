<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontre seu Advogado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Link para ícones Font Awesome -->
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./imgs/logoadv.png" alt="Logo da Empresa" height="90" width="90">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Início</a></li>
            <li><a href="index.php#area-atuacao">Área de Atuação</a></li>
            <li><a href="index.php#advogados">Advogados</a></li>
            <li><a href="index.php#nossa-visao">Nossa Visão</a></li>
            <li><a href="index.php#contato">Contato</a></li>
            <li><a href="perfis.php">Encontre um Advogado</a></li>
        </ul>
    </nav>

    <section id="inicio" class="Início"></section>

    <section id="advogados1" class="seja-advogados">
        <div class="overlay"></div> 
        <div class="content">
            <h1>Encontre o seu advogado!</h1>
            <p>Aqui você encontra profissionais especializados em diversas áreas do Direito, prontos para oferecer a melhor solução jurídica. Explore perfis detalhados, conheça a experiência de cada advogado e agende sua consulta com rapidez e praticidade. Simplifique sua busca e garanta o suporte jurídico que você merece!</p>
            <button class="cadastrar-button" onclick="location.href='perfil.php'">Encontrar</button>
        </div>
    </section>

    <div class="main-containerrr">
        <h1 class="title">Encontre o seu advogado</h1>
        <img src="./imgs/logoadv2.png" alt="Logo Conexão Advocacia" class="logoooo">

        <!-- Perfis dos advogados -->
        <div class="dropdown-containerr">
            <div class="adv-card">
                <img src="./imgs/avatar.png" alt="João Ferreira" class="adv-avatar">
                <p class="adv-name">JOÃO FERREIRA</p>
                <p class="adv-desc">ADVOGADO - OAB 123/456</p>
                <p>Especialista em Imóveis</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
               
            </div>

            <div class="adv-card">
                <img src="./imgs/avatar.png" alt="Mariane Ferreira" class="adv-avatar">
                <p class="adv-name">MARIANE FERREIRA</p>
                <p class="adv-desc">ADVOGADA - OAB 123/456</p>
                <p>Especialista em Pensão e Aposentadoria</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
               
            </div>

            <div class="adv-card">
                <img src="./imgs/avatar.png" alt="Maria Ferreira" class="adv-avatar">
                <p class="adv-name">MARIA FERREIRA</p>
                <p class="adv-desc">ADVOGADA - OAB 123/456</p>
                <p>Especialista em Trânsito</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
