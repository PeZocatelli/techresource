
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
    <section id="nossa-visao" class="nossa-visao">
        <div class="content">
            <h2>NOSSA VISÃO</h2>
            <p>A Conexão Advocacia visa ser reconhecida como um escritório de advocacia líder e inovador, comprometido com a excelência jurídica e a justiça social. Nosso objetivo é criar um impacto positivo na sociedade, oferecendo soluções jurídicas personalizadas e eficientes, que atendam às necessidades específicas de cada cliente.
                Queremos ser a ponte que conecta nossos clientes às soluções legais mais adequadas, proporcionando um atendimento humano, ético e transparente. Nossa visão é construir um futuro onde a justiça seja acessível a todos, promovendo a inclusão, a equidade e o desenvolvimento sustentável.
                Ao integrar tecnologia de ponta com a expertise jurídica, aspiramos a redefinir o mercado legal, tornando-o mais ágil, eficaz e próximo das pessoas. Nos próximos anos, pretendemos expandir nossa atuação, estabelecendo parcerias estratégicas e consolidando nossa presença em diversas áreas do direito, sempre pautados pelos valores que nos definem: integridade, compromisso e inovação.</p>
        </div>
    </section>

   
    <section id="advogados" class="advogados">
        <div class="container">
            <h1>NOSSOS ADVOGADOS</h1>
            <div class="profile-list">
                <div class="profile">
                    <img src="./imgs/matheus.JPG" alt="Matheus Villar">
                    <h2>Matheus Villar</h2>
                    <p>Sócio</p>
                    <button onclick="location.href='https://wa.me/5512777777777'">Chamar no WhatsApp</button>
                </div>
                <div class="profile">
                    <img src="./imgs/eu.JPG" alt="Pedro">
                    <h2>Pedro Zocatelli</h2>
                    <p>Advogado Associado</p>
                    <button onclick="location.href='https://wa.me/5512888888888'">Chamar no WhatsApp</button>
                </div>
                <div class="profile">
                    <img src="./imgs/rian.JPG" alt="Rian">
                    <h2>Rian</h2>
                    <p>Advogado Júnior</p>
                    <button onclick="location.href='https://wa.me/5512999999999'">Chamar no WhatsApp</button>
                </div>
                <div class="profile">
                    <img src="./imgs/gustavo.JPG" alt="Gustavo">
                    <h2>Gustavo Henrique</h2>
                    <p>Advogado Pleno</p>
                    <button onclick="location.href='https://wa.me/5512666666666'">Chamar no WhatsApp</button>
                </div>
                <div class="profile">
                    <img src="./imgs/kaua.JPG" alt="Kaua">
                    <h2>Kaua </h2>
                    <p>Estagiário</p>
                    <button onclick="location.href='https://wa.me/5512555555555'">Chamar no WhatsApp</button>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="contato">
        <div class="content2">
            
            <h1>Entre em <br>Contato Conosco</h1>
        </div>
        <div class="content3">
            <h2>Nosso endereço</h2>
            <p>Edificio Olimpus Offices, R.José <br>
            Augusto dos Santos, 108 - sala 106 - <br>
            Floradas de São José dos <br>
            Campos - (12) 77777-7777</p>
            <br>
            <a href="">Clique aqui para ver nossa localização</a>
            <br>
            <h1>Para qualquer solicitação, preencha os campos no formulario abaixo:</h1>
            
            
            
            <input type="text" id="usuario" name="usuario" placeholder="E-mail ou nome de usuário" required> <br>
            <input type="password" id="password" name="password" placeholder="Senha" required> <br>
            <input type="text" id="telefone" name="telefone" placeholder="Telefone" required>
            <br>
            <br>
            <input type="text" id="comentario" name="comentario" placeholder="Digite sua mensagem aqui..." required> <br>
            <button id="enviar">Enviar</button>

        </div>
    </section>

</body>
</html>
