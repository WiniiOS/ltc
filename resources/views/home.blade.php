@extends('layouts.app')

@section('hero')
    @include('partials.hero')
@endsection

@section('content')
            
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
        <div class="col-lg-6 video-box">
            <img src="{{ url('imports/assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://youtu.be/xf2omw_ALc8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
            <h2>Qui sommes-nous ?</h2>
            <p>L’entreprise LTC Group SARL est une entreprise exerçant dans divers domaines des nouvelles technologies entre autres le marketing digital, le développement d’application mobile et web, la communication, la publicité sur internet, la prestation de services, bâtiments et travaux publics, et le commerce général</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">LTC GROUP </a></h4>
            <p class="description">En partenariat avec UBA cette branche s’occupe de : 
                ✓ Vente des cartes visa prépayée UBA
                ✓ Recharge des cartes visa prépayée UBA
                ✓ Formations
            </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">LTC GROUP COMMUNICATION</a></h4>
            <p class="description"> Cette branche est dédiée au marketing digital entre autres :
                ✓ La publicité sur internet (Facebook, Instagram, YouTube...)
                ✓ La communication digitale : gestion des pages et des contenus digitaux ✓ La création des logos
                ✓ La création des affiches
                ✓ Graphisme
            </p>
            </div>

        </div>
        </div>

    </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
    <div class="container">

        <div class="row">

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients satisfaits</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
            <p>Réalisations</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Heures de Support</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Membres</p>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Services</h2>
        </div>

        <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
            <h4 class="title"><a href="">LTC GROUP</a></h4>
            <p class="description">
            En partenariat avec UBA cette branche s’occupe de : ✓ Vente des cartes visa prépayée UBA
            ✓ Recharge des cartes visa prépayée UBA
            ✓ Formations
            </p>

        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">LTC GROUP COMMUNICATION</a></h4>
            <p class="description">Cette branche est dédiée au marketing digital entre autres :
                ✓ La publicité sur internet (Facebook, Instagram, YouTube...)
                ✓ La communication digitale : gestion des pages et des contenus digitaux ✓ La création des logos
                ✓ La création des affiches
                ✓ Graphisme
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">LTC GROUP HOST</a></h4>
            <p class="description">Ce volet s’occupe de :
                ✓ La création des sites web
                ✓ Du développement des applications
                ✓ De la vente et achat des cryptomonnaies
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">E-MARKET</a></h4>
            <p class="description">Site de vente en ligne de l’entreprise, cette branche propose plusieurs articles disponibles que nous regroupons en différentes catégories ci-après :
                    ✓ Produits électroniques
                    ✓ Accessoires hommes/femmes
                    ✓ Accessoires enfants
                    ✓ Accessoires de protection
                    ✓ Outils informatiques
                    ✓ Produits vidéo-surveillances
                    ✓ Accessoires de stockage
                    ✓ Accessoires de voitures
                    ✓ Accessoires pour ordinateurs
                    ✓ Drones et accessoires
                    ✓ Lampes et accessoires de luminosité ✓ Etc...
                </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">GO LIVRAISON</a></h4>
            <p class="description">Nous proposons à travers cette branche un service de livraison des produits (produits divers, repas etc...) a des commerçants n’ayant pas de temps d’effectuer eux même leur livraison dans les villes de Yaoundé et Douala. Cela consiste à :
                ➢ Enregistrer les commandes des partenaires
                ➢ Déléguer un livreur qui appel le partenaire et va collecter ses articles ➢ Contacter les clients et effectuer les livraisons de ce dernier
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">SERVICE CLIENT</a></h4>
            <p class="description">Notre service client est disponible chaque jour pour vous orrienter.</p>
        </div>
        </div>

    </div>
    </section><!-- End Services Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
        <h2>Nos Réalisations</h2>
        <p>Nos récentes réalisations graphiques et projets de sites webs livrés .</p>
        </div>

        <div class="row">
        <div class="col-lg-12">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tout</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Notre Team</h2>
        <p>LTC GROUP SARL est principalement constitué d'une équipe jeune et dynamique.</p>
        </div>

        <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
            <div class="pic"><img src="{{ url('imports/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Lontsi</h4>
                <span>CEO</span>
                <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
            <div class="pic"><img src="{{ url('imports/assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Ornelle</h4>
                <span>Assistante Direction</span>
                <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
            <div class="pic"><img src="{{ url('imports/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Christian</h4>
                <span>Infographe</span>
                <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
            <div class="pic"><img src="{{ url('imports/assets/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Frederic</h4>
                <span>Developpeur</span>
                <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Map Section ======= -->
    <section id="map" class="map section-bg">
    <div class="container" data-aos="fade-up">

        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=905&amp;height=424&amp;hl=en&amp;q=Mvan descente entrée complexe BEAC Yaoundé, Cameroun&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.gachacute.com/">www.gachacute.com</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:424px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:424px;}.gmap_iframe {height:424px!important;}</style>
        </div>
    </div>
    </section><!-- End Map -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Contactez-nous</h2>
        </div>

        <div class="row">

        <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Notre Addresse</h3>
            <p>Mvan descente entrée complexe BEAC, Yaoundé, Cameroun</p>
            </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>ltcgroup@cyberjob.cm</p>
            </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
            <i class="bx bx-phone-call"></i>
            <h3>Telephone</h3>
            <p>+237 691 371 922<br> +237 670 129 795</p>
            </div>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

            <form action="{{ route('sendmail') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                </div>
                <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            

            <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Merçi! Votre message a bien été envoyé.</div>
            </div>
            
            <div class="text-center"><button type="submit">Envoyer</button></div>
            <!-- <input type="submit" value="Envoyer"> -->
            </form>
            @if (session('successMail'))
                <div class="alert alert-success">
                    {{ session('successMail') }}
                </div>
            @endif
        </div>

        </div>

    </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->    

@endsection




