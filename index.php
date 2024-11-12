
<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Navegação com Logo</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="./imgs/logoadv.png" alt="Logo da Empresa" height="90" height="90">
        </div>
        <ul class="nav-links">
            <li><a href="#inicio">Início</a></li>
            <li><a href="#area-atuacao">Área de Atuação</a></li>
            <li><a href="#nossa-visao">Nossa Visão</a></li>
            <li><a href="#advogados">Advogados</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
    </section>
    <section id="inicio" class="Início">
        
    </section>
    
    <div class="sidebar-rect">
        <h1>ESCRITÓRIO</h1>
        <h2>ADVOCACIA</h2>
        <hr>
        <p>Especialistas em Direito do Trabalho & Cível</p>
    </div>

    <div class="background">
        <button  class="whatsapp-button">Chamar via WhatsApp</button>
    </div>
 <div class="container">
        <section id="area-atuacao" class="Área de Atuação">
        
        </section>
    
        <div class="divisao">
            <h1>ÁREAS DE ATUAÇÃO</h1>
            <img src="./imgs/martelo.jpg" alt="Imagem jurídica">
        </div>
        <div class="content">
            <ul>
                <li><strong>Direito civil:</strong> representa interesses individuais em casos relacionados à
                    propriedade, bens ou questões familiares.</li>
                <li><strong>Direito administrativo:</strong> trata de leis que regulamentam órgãos e poderes públicos, e
                    sua relação com a sociedade.</li>
                <li><strong>Direito ambiental:</strong> defende o meio ambiente e os recursos naturais contra danos
                    causados por atividades humanas.</li>
                <li><strong>Direito penal:</strong> atua na defesa ou acusação de pessoas envolvidas em crimes.</li>
                <li><strong>Direito trabalhista:</strong> lida com questões relacionadas ao trabalho, como contratos,
                    salários, direitos e deveres dos empregados e empregadores.</li>
                <li><strong>Direito imobiliário:</strong> Compra e venda de imóveis, locação, assessoria jurídica em
                    negócios imobiliários.</li>
                <li><strong>Direito Consensual:</strong> Minutas contratuais, análise de casos, assessoria em relações
                    trabalhistas, homologação de acordos.</li>
            </ul>
        </div>
    </div>    
    <section id="advogados" class="seja-advogado">
    <div class="overlay"></div> <!-- Sobreposição escura -->
    <div class="content">
        <h1>Seja Advogado com a Gente</h1>
        <p>Cadastre-se para participar e compartilhar seu trabalho conosco. Junte-se a nós e faça parte de uma equipe dedicada ao crescimento e à excelência na advocacia.</p>
        <button class="cadastrar-button" onclick="location.href='perfil.php'">Cadastrar</button>
    </div>
</section>
<section id="nossa-visao" class="nossa-visao">
    <div class="contentt">
        <!-- Texto à direita -->
        <div class="text-content">
            <h2 class="tex">NOSSA VISÃO</h2>
            <p class="tex">
                A Conexão Advocacia visa ser reconhecida como um escritório de advocacia líder e inovador, comprometido com a excelência jurídica e a justiça social. Nosso objetivo é criar um impacto positivo na sociedade, oferecendo soluções jurídicas personalizadas e eficientes, que atendam às necessidades específicas de cada cliente.
                Queremos ser a ponte que conecta nossos clientes às soluções legais mais adequadas, proporcionando um atendimento humano, ético e transparente. Nossa visão é construir um futuro onde a justiça seja acessível a todos, promovendo a inclusão, a equidade e o desenvolvimento sustentável.
                Ao integrar tecnologia de ponta com a expertise jurídica, aspiramos a redefinir o mercado legal, tornando-o mais ágil, eficaz e próximo das pessoas. Nos próximos anos, pretendemos expandir nossa atuação, estabelecendo parcerias estratégicas e consolidando nossa presença em diversas áreas do direito, sempre pautados pelos valores que nos definem: integridade, compromisso e inovação.
            </p>
        </div>
    
        
        <!-- Imagem à esquerda -->
        <div class="tex">
          
        </div>
    </div>
</section>







<section id="contato" class="contato">
    <section class="contact-form">
        <div class="left">
            <h2>OBTENHA UMA AVALIAÇÃO DE CASO GRATUITA HOJE MESMO!</h2>
            <p>DISPONÍVEL 24 HORAS POR DIA!</p>
            <form>
                <input type="text" placeholder="Digite seu nome" required>
                <input type="email" placeholder="Digite um email válido" required>
                <textarea placeholder="Escreva sua mensagem" required></textarea>
                <button type="submit">ENVIAR</button>
            </form>
        </div>

        <div class="right">
            <h3>ESTAMOS AQUI</h3>
            <p>SEG-SEX DAS 8H30 ÀS 17H / TELEFONES ABERTOS 24 HORAS POR DIA, 7 DIAS POR SEMANA</p>
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14678.15760221945!2d-45.7070424!3d-23.1139511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc53fe5d561195%3A0xf8b1e6391017595b!2sSesi%20Ca%C3%A7apava!5e0!3m2!1spt-BR!2sbr!4v1730221419198!5m2!1spt-BR!2sbr"
            width="400" 
            height="220" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
        </div>
    </section>

    <div class="info-block">
        <div class="contact-item">
            <h3>NOS LIGUE</h3>
            <p>+55 (12) 3567-8912<br>+55 (12) 99387-6542</p>
        </div>
        <div class="contact-item">
            <h3>LOCALIZAÇÃO</h3>
            <p>Av. Monsenhor Theodomiro Lobo, Maria Elmira,<br>Caçapava - SP, 12285-050</p>
            
        </div>
        <div class="contact-item">
            <h3>HORÁRIOS</h3>
            <p>Segunda a Sexta das 8H30 ÀS 20H , Sáb e Dom das 9h às 18h</p>
        </div>
    </div>
</div>

</body>
</html>
