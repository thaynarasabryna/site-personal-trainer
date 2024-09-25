<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>José Vitor - Personal Trainer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;700&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <div class="main">
        <!-- Navbar -->
        <header>
            <nav>
                <img src="./static/images/logoJV2-branca.pdf.png" class="logo" alt="logo">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#sobre-mim">Sobre Mim</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>

            <!-- Primeira Sessão - Banner -->
            <section class="banner">
                <div class="banner-text">
                    <h1>Quem não pode errar sou eu!</h1>
                    <p>Um estilo de vida</p>
                </div>
            </section>
        </header>
    </div>
    
    <!-- Segunda Sessão - Serviços (Atualizado) -->
    <section class="servicos">
        <div class="servico" onclick="window.location.href='#';">
            <img src="./static/images/presencial.jpg" alt="Acompanhamento Presencial">
            <div class="servico-text">
                <h2>Acompanhamento</h2>
                <p>Presencial e personalizado</p>
            </div>
        </div>
        <div class="servico" onclick="window.location.href='#';">
            <img src="./static/images/produto.jpeg" alt="Produtos">
            <div class="servico-text">
                <h2>Produtos</h2>
                <p>Qualidade e estilo</p>
            </div>
        </div>
        <div class="servico" onclick="window.location.href='#';">
            <img src="./static/images/onlineteste.jpg" alt="Acompanhamento Online">
            <div class="servico-text">
                <h2>Acompanhamento</h2>
                <p>Online e acessível</p>
            </div>
        </div>
    </section>

    <!-- Terceira Sessão - Sobre Mim -->
    <section class="sobre-mim" id="sobre-mim">
        <div class="bio-image">
            <img src="./static/images/sobremim2.jpg" alt="Foto do Personal Trainer">
        </div>
        <div class="bio">
            <h2>Sobre Mim</h2>
            <p>
                Oi, sou o José Vitor, personal trainer com 23 anos e uma paixão imensa por ajudar pessoas a atingirem seus melhores resultados físicos. Desde jovem, sou fascinado pelo mundo da saúde e fitness, e essa paixão se transformou em uma carreira na qual dedico minha energia para inspirar e transformar a vida de meus alunos.

                Minha abordagem é moderna, dinâmica e focada em resultados. Desenvolvo planos de treino personalizados, adaptando cada rotina às necessidades e objetivos individuais, seja para quem está começando ou para quem já possui experiência no mundo fitness.

                Fora do trabalho, sou um entusiasta de esportes ao ar livre e gosto de explorar novas formas de manter a saúde física e mental em equilíbrio. Se você está pronto para transformar seu corpo e sua vida, estou aqui para te guiar nessa jornada.
            </p>
        </div>
    </section>

    <!-- Quarta Sessão - Contato -->
    <section class="contato" id="contato">
        <div class="divContatoLeft">
            <img src="./static/images/logoJV2-branca.pdf.png" class="logo-contato" alt="logo">
        </div>
        <div class="divContatoRight">
            <h2>Para mais informações entre em contato</h2>
            <a href="https://wa.me/5538997423326?text=Olá,%20vim%20do%20site%20e%20queria%20mais%20informações!" target="_blank" class="contato-btn" >
                <i class="fab fa-whatsapp"></i>Fale Comigo
            </a>
        </div>
    </section>

    <!-- Quinta Sessão - Rodapé -->
    <footer>
        <div class="social-icons">
            <div>
                <a href="https://www.instagram.com/jose.vitor.melo/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/5538997423326" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:josevitor.melo23@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i></a>
            </div>
            <div>
                <p>© 2024 José Vitor | Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <!-- <script src="script.js"></script> -->
</body>
</html>
