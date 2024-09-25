<?php

include_once 'config/Database.php';
include_once 'class/Event.php';
include_once 'class/Information.php';

$db = new Database();
$conn = $db->getConnection();


$event = new Event($conn);
$events = $event->getEvents();

$information = new Information($conn);
$informations = $information->getInfos();
$info = $informations;

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toystop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo-toys-top.png" />
</head>

<body>

    <a href="#Inicio" id="backToTopBtn" style="text-decoration: none;">
        <i class="fa-solid fa-angle-up"></i>
    </a>

    <!-- start nav -->
    <nav id="Inicio" class="navbar navbar-expand-lg bg-body-tertiary navbar-overlay">
        <div class="container-fluid container-nav-contents">
            <a class="navbar-brand" href="#"><img src="assets/images/logo-toys-top.png" alt="logo" width="140"
                    height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#Inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Brinquedos">Brinquedos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Duvidas">Dúvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contatos">Contatos</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- end nav  -->


    <!-- start main banner  -->
    <div class="image-container">
        <img src="assets/images/bungee-kids.jpeg" class="img-fluid" alt="...">
        <div class="overlay"></div>
        <div class="container banner-content" id="Brinquedos">
            <h1>Eventos Incríveis com Diversão Garantida</h1>
            <p>Com nossos brinquedos, todo evento se torna mais vibrante e inesquecível!</p>
        </div>
    </div>
    <!-- end main banner  -->

    <!-- start floating section -->
    <div class="floating-section">
        <div class="toys-cards-container">
            <div class="toy-card" style="object-position:50% 100% !important;">
                <img src="assets/images/bungy-jump-2.png" alt="Brinquedo 1" class="toy-image">
                <div class="text-start p-3">
                    <h3 class="toy-title"><strong>Jump</strong></h3>
                    <p class="toy-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus culpa
                        voluptatibus necessitatibus possimus cupiditate nam reprehenderit eum repellendus, maxime ab
                        optio aliquid totam. In, officia dicta pariatur animi quidem rerum.</p>
                </div>
                <a href="https://wa.me/554391590383?text=Olá!%20Gostaria%20de%20falar%20sobre%20seus%20brinquedos."
                    target="_blank">
                    <button class="btn-toys-acquire">
                        <strong>CONTRATAR BRINQUEDO</strong>
                    </button>
                </a>
            </div>
            <div class="toy-card">
                <img src="assets/images/bungy-jump.png" alt="Brinquedo 1" class="toy-image">
                <div class="text-start p-3">
                    <h3 class="toy-title"><strong>Park De Cama Elástica</strong></h3>
                    <p class="toy-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus culpa
                        voluptatibus necessitatibus possimus cupiditate nam reprehenderit eum repellendus, maxime ab
                        optio aliquid totam. In, officia dicta pariatur animi quidem rerum.</p>
                </div>
                <a href="https://wa.me/554391590383?text=Olá!%20Gostaria%20de%20falar%20sobre%20seus%20brinquedos."
                    target="_blank">
                    <button class="btn-toys-acquire">
                        <strong>CONTRATAR BRINQUEDO</strong>
                    </button>
                </a>
            </div>
            <div class="toy-card">
                <img src="assets/images/roller-coaster.png" alt="Brinquedo 1" class="toy-image">
                <div class="text-start p-3">
                    <h3 class="toy-title"><strong>Montanha Russa Virtual</strong></h3>
                    <p class="toy-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus culpa
                        voluptatibus necessitatibus possimus cupiditate nam reprehenderit eum repellendus, maxime ab
                        optio aliquid totam. In, officia dicta pariatur animi quidem rerum.</p>
                </div>
                <a href="https://wa.me/554391590383?text=Olá!%20Gostaria%20de%20falar%20sobre%20seus%20brinquedos."
                    target="_blank">
                    <button class="btn-toys-acquire">
                        <strong>CONTRATAR BRINQUEDO</strong>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!-- end floating section -->

    <!-- start toys section -->
    <div class="container-fluid toys-section" id="Sobre">
        <div class="text-center mb-4">
            <h1 class="title-video-section" style="margin-bottom: 92px;">Transforme Seus Eventos com Nossos Brinquedos
            </h1>
        </div>

        <div class="row align-items-center" style="justify-content: center;">
            <div class="col-md-6">
                <div class="video-container">
                    <video controls>
                        <source src="assets/videos/apresentation-3.mp4" type="video/mp4">
                        Seu navegador não suporta a tag de vídeo.
                    </video>
                </div>
            </div>

            <div class="col-md-5 text-content">
                <div class="text-video" style="
                font-size: 18px;
                ">
                    <h1>Diversão Garantida em Seus Eventos</h1>
                    <p>
                        Na Toystop, temos o compromisso de transformar qualquer evento em uma experiência inesquecível
                        para todos. Especializados em brinquedos infantis para festas e eventos, nossa empresa oferece
                        uma vasta gama de opções para garantir que cada celebração seja divertida e envolvente.
                    </p>
                    <p>
                        Nosso trabalho vai além do simples fornecimento de brinquedos. Desde o planejamento até a
                        execução, nossa equipe dedicada se empenha em atender cada detalhe com precisão e cuidado.
                        Estamos totalmente comprometidos em garantir que cada evento seja um sucesso absoluto,
                        oferecendo suporte completo, desde a montagem até a desmontagem dos brinquedos.
                    </p>
                    <p>
                        Na Toystop, acreditamos que cada evento é uma oportunidade para criar memórias inesquecíveis.
                        Por isso, trabalhamos arduamente para oferecer uma experiência personalizada que atenda às suas
                        necessidades e expectativas. Com nossa paixão e experiência, garantimos que sua festa seja única
                        e cheia de diversão.


                        Deixe-nos transformar sua próxima celebração em uma verdadeira festa, cheia de alegria e
                        momentos especiais para todos os convidados. Entre em contato conosco e descubra como podemos
                        tornar seu evento inesquecível!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end toys section -->


    <!-- start statistics section -->
    <div class="container-fluid statistics-section" id="statistics">
        <div class="row text-center">
            <div class="col-3">
                <div class="stat-box">
                    <div class="icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="statistics">
                        <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;">
                            <div class="stat-number number-item" data-target="100+">100+</div>
                        </div>
                        <div class="stat-name">Eventos realizados com sucesso</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="stat-box">
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="statistics">
                        <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;">
                            <div class="stat-number number-item" data-target="100+">100+</div>
                        </div>
                        <div class="stat-name">De satisfação dos nossos clientes</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="stat-box">
                    <div class="icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <div class="statistics">
                        <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;">

                            <div class="stat-number number-item" data-target="12+">12+</div>
                        </div>
                        <div class="stat-name">Cidades atendidas pelo Brasil</div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="stat-box">
                    <div class="icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="statistics">
                        <div style="
                    display: flex;
                    justify-content: center;
                    align-items: center;">

                            <div class="stat-number number-item" data-target="10">10+</div>
                        </div>
                        <div class="stat-name">De anos de experiência no mercado</div>
                    </div>
                </div>
            </div>
            <div class="container-fluid btn-container">
                <a href="https://wa.me/554391590383?text=Olá!%20Gostaria%20de%20falar%20sobre%20seus%20brinquedos."
                    target="_blank">
                    <button class="btn-hire-now">Contrate agora</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end statistics section -->




    <!-- start events section -->


    <div class="events-container" style="background-color: white;" id="Eventos">

        <h1 class="events-title">AGENDA DE FESTAS E EVENTOS</h1>

        <div class="events-list">
            <?php foreach ($events as $event): ?>
                <hr>
                <div class="event-item">
                    <div class="event-date">
                        <div class="date">
                            <strong><?php echo $event['formatted_dates']['date_range']; ?></strong>
                        </div>
                        <div class="month">
                            <strong><?php echo $event['formatted_dates']['month']; ?></strong>
                        </div>
                    </div>
                    <div class="event-image">
                        <img src='cms/uploads/events/<?php echo $event['ufile']; ?>' alt="Foto Do Evento">
                    </div>
                    <div class="event-text">
                        <h3><?php echo $event['title']; ?></h3>
                        <p style="max-width: 800px;"><?php echo $event['description']; ?></p>
                        <p><i class="fa-solid fa-location-dot"></i> <?php echo $event['address']; ?></p>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>

    </div>
    <!-- end events section -->


    <!-- start FAQ section -->
    <div class="container-fluid faq-section-container" id="Duvidas">

        <div class="faq-section">

            <h1 style="margin-bottom: 92px;">Perguntas Frequentes</h1>

            <div class="accordion" id="faqAccordion">

                <div class="accordion-item" style="border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button faq-header collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2Collapse" aria-expanded="false" aria-controls="faq2Collapse"
                            style="border-radius: 6px; border: 1px solid #ddd;">
                            Os brinquedos são seguros para crianças de todas as idades?
                        </button>
                    </h2>
                    <div id="faq2Collapse" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-body">
                            Sim, todos os brinquedos passam por manutenção regular e seguem normas de segurança para
                            garantir a diversão e a proteção das crianças de todas as idades.
                        </div>
                    </div>
                </div>


                <div class="accordion-item" style="border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">

                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button faq-header collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3Collapse" aria-expanded="false" aria-controls="faq3Collapse"
                            style="border-radius: 6px; border: 1px solid #ddd;">
                            Como faço para alugar os brinquedos?
                        </button>
                    </h2>

                    <div id="faq3Collapse" class="accordion-collapse collapse" aria-labelledby="faq3"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-body">
                            Para alugar os brinquedos, entre em contato conosco pelo formulário de contato ou ligue
                            diretamente para o número fornecido no site.
                        </div>
                    </div>
                </div>


                <div class="accordion-item" style="border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">

                    <h2 class="accordion-header" id="faq6">
                        <button class="accordion-button faq-header collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6Collapse" aria-expanded="false" aria-controls="faq6Collapse"
                            style="border-radius: 6px; border: 1px solid #ddd;">
                            Como é feito o processo de montagem e desmontagem dos brinquedos?
                        </button>
                    </h2>

                    <div id="faq6Collapse" class="accordion-collapse collapse" aria-labelledby="faq6"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-body">
                            A montagem e desmontagem dos brinquedos são realizadas por nossa equipe especializada para
                            garantir a segurança e a eficiência. Chegamos com antecedência para montar o brinquedo e o
                            desmontamos após o evento.
                        </div>
                    </div>
                </div>


                <div class="accordion-item" style="border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">

                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button faq-header collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4Collapse" aria-expanded="false" aria-controls="faq4Collapse"
                            style="border-radius: 6px; border: 1px solid #ddd;">
                            Quais são os horários disponíveis para os eventos?
                        </button>
                    </h2>

                    <div id="faq4Collapse" class="accordion-collapse collapse" aria-labelledby="faq4"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-body">
                            Os horários disponíveis para eventos são flexíveis e podem ser ajustados conforme sua
                            necessidade. Entre em contato conosco para verificar a disponibilidade no período desejado.
                        </div>
                    </div>

                </div>


                <div class="accordion-item" style="border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">

                    <h2 class="accordion-header" id="faq5">
                        <button class="accordion-button faq-header collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5Collapse" aria-expanded="false" aria-controls="faq5Collapse"
                            style="border-radius: 6px; border: 1px solid #ddd;">
                            Qual é o tamanho máximo do espaço necessário para os brinquedos?
                        </button>
                    </h2>

                    <div id="faq5Collapse" class="accordion-collapse collapse"
                        aria-labelledby="faq5"=data-bs-parent="#faqAccordion">
                        <div class="accordion-body faq-body">
                            O tamanho necessário para cada brinquedo varia. Recomendamos um espaço mínimo de 5x5 metros
                            para garantir segurança e uma experiência divertida. Entre em contato conosco para obter as
                            dimensões exatas de cada brinquedo.
                        </div>
                    </div>
                </div>


                <div class="faq-footer" id="Contatos">
                    <p>Não encontrou sua resposta?</p>
                    <p>Estamos prontos para responder suas perguntas</p>
                    <a href="https://wa.me/554391590383?text=Olá!%20Gostaria%20de%20falar%20sobre%20seus%20brinquedos."
                        target="_blank">
                        <button>Entre em contato</button>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- end FAQ section -->



    <!-- start contact section -->
    <div class="contact-section">
        <div class="row">

            <div class="contact-form-container col-md-3">
                <h2>Mande uma mensagem</h2>
                <form id="contactForm">
                    <div class="form-group mb-2">
                        <label for="name">Nome</label>
                        <input type="text" id="name" class="form-control" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="message">Mensagem</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Digite sua mensagem"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>

            <div class="contact-infos-container col-md-4"
                style="display: flex; flex-direction: column; align-content: center; flex-wrap: wrap;">
                <h2>Informações de contato</h2>

                <strong style="font-size: 20px;">Celular:</strong>
                <p style="font-size: 16px;"><?php echo $info['phone'] ?></p>
                <strong style="font-size: 20px;">Email:</strong>
                <p style="font-size: 16px;"><?php echo htmlspecialchars($info['email']) ?></p>
            </div>
            <div class="map-container col-md-3">
                <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14711.328211779977!2d<?php echo $info['phone'] ?>!3d<?php echo $info['latitude'] ?>!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94edef8b92a377c9%3A0xa577d162d3d7806d!2sIbipor%C3%A3%2C%20PR!5e0!3m2!1sen!2sbr!4v1694787341234!5m2!1sen!2sbr"
                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>

        </div>
    </div>
    <!-- end contact section -->


    <!-- start footer -->
    <footer class="footer-section"
        style="background-image: url('assets/images/bg_footer.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">

                            <div class="footer-logo">
                                <a href="index.html"><img src='cms/uploads/logo/<?php echo $info['ufile']; ?>'
                                        class="img-fluid" alt="logo"></a>

                            </div>

                            <div class="footer-text">
                                <p>Toystop é uma empresa especializada no fornecimento de brinquedos infantis para
                                    eventos e festas. Nossa missão é transformar qualquer celebração em uma experiência
                                    inesquecível para as crianças.
                                <p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 mb-30 fast-acess"
                        style="margin-left: 20px; margin-right: 20px;">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Acesso Rápido</h3>
                            </div>

                            <ul>
                                <li><a href="#Inicio">Início</a></li>
                                <li><a href="#Brinquedos">Brinquedos</a></li>
                                <li><a href="#Sobre">Sobre</a></li>
                                <li><a href="#Eventos">Eventos</a></li>
                                <li><a href="#Duvidas">Dúvidas</a></li>
                                <li><a href="#Contatos">Contatos</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">

                            <div class="footer-widget-heading">
                                <h3>Siga a gente no Instagram</h3>
                            </div>

                            <div class="footer-social-posts">
                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-6.webp');"></div>
                                </a>
                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-4.webp');"></div>
                                </a>
                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-1.webp')"></div>
                                </a>

                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-2.webp');"></div>
                                </a>

                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-3.webp');"></div>
                                </a>
                                <a href="https://www.instagram.com/toystop_entretenimento?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="instagram-post">
                                    <div class="instagram-post-image"
                                        style="background-image: url('assets/images/post-5.webp');"></div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, Todos Direitos Reservados <a target="_blank"
                                    href="https://berliozsolutions.com/">Berlioz Solutions</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#Inicio">Início</a></li>
                                <li><a href="#Brinquedos">Brinquedos</a></li>
                                <li><a href="#Sobre">Sobre</a></li>
                                <li><a href="#Eventos">Eventos</a></li>
                                <li><a href="#Duvidas">Dúvidas</a></li>
                                <li><a href="#Contatos">Contatos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer-->

    <script src="assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://kit.fontawesome.com/3fcdf21787.js" crossorigin="anonymous"></script>

</body>

</html>