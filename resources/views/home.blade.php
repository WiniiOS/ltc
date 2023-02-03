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
            <h2> {{ __("ltc.About-us") }} </h2>
            <p> {{ __("ltc.AboutDescription") }} </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href=""> {{ __("ltc.AboutFirstItemTitle") }} </a></h4>
            <p class="description"> {{ __("ltc.AboutFirstDesc") }} </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href=""> {{ __("ltc.AboutSecondItemTitle") }} </a></h4>
            <p class="description"> {{ __("ltc.AboutSecondDesc") }} </p>
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
            <p>{{ __("ltc.Stat1") }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __("ltc.Stat2") }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __("ltc.Stat3") }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __("ltc.Stat4") }}</p>
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
            <h4 class="title"><a href="">{{ __("ltc.Service1") }}</a></h4>
            <p class="description">
            {{ __("ltc.Service1Desc") }}
            </p>

        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">{{ __("ltc.Service2") }} </a></h4>
            <p class="description">
            {{ __("ltc.Service2Desc") }}
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">{{ __("ltc.Service3") }} </a></h4>
            <p class="description">
            {{ __("ltc.Service3Desc") }}
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">{{ __("ltc.Service4") }}</a></h4>
            <p class="description">
            {{ __("ltc.Service4Desc") }}
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">{{ __("ltc.Service5") }}</a></h4>
            <p class="description">
            {{ __("ltc.Service5Desc") }}
            </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">{{ __("ltc.Service6") }}</a></h4>
            <p class="description">{{ __("ltc.Service6Desc") }}</p>
        </div>
        </div>

    </div>
    </section><!-- End Services Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
        <h2>{{ __("ltc.PortfolioHeader") }}</h2>
        <p>{{ __("ltc.PortfolioDesc") }}</p>
        </div>

        <div class="row">
        <div class="col-lg-12">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">{{ __("ltc.FilterAll") }}</li>
            <li data-filter=".filter-visuel">{{ __("ltc.FilterGraphic") }}</li>
            <li data-filter=".filter-web">{{ __("ltc.FilterWeb") }}</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-visuel">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Graphic 1</h4>
                <p>Graphic</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-visuel">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Graphic 2</h4>
                <p>Graphic</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 1</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-visuel">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Graphic 3</h4>
                <p>Graphic</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
            <img src="{{ url('imports/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Graphic 6</h4>
                <p>Graphic</p>
                <div class="portfolio-links">
                <a href="{{ url('imports/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Our Portfolio Section -->


    <!-- ======= Map Section ======= -->
    <section id="map" class="map contact">
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
        <h2>{{ __("ltc.ContactHeader") }}</h2>
        </div>

        <div class="row">

        <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>{{ __("ltc.Box1Header") }}</h3>
            <p><span style="font-weight:bold;color:grey;">Yaoundé</span> : {{ __("ltc.Box1Desc1") }} </p><br>
            <p><span style="font-weight:bold;color:grey;">Douala</span> : {{ __("ltc.Box1Desc2") }} </p>

            </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:contact@ltcgroup.net">contact@ltcgroup.net</a> </p>
            </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
            <i class="bx bx-phone-call"></i>
            <h3>{{ __("ltc.Box3Header") }}</h3>
            <p><a href="tel:+237 673 209 375">+237 673 209 375</a><br><a href="tel:+237 691 371 922">+237 691 371 922</a><br> <a href="tel:+237 670 129 795">+237 670 129 795</a></p>
            </div>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

            <form action="{{ route('sendmail') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('ltc.Field1Desc') }}" required>
                </div>
                <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            

            <div class="my-3">
                <div class="loading">{{ __("ltc.Loader") }}</div>
                <div class="error-message"></div>
                <div class="sent-message">{{ __("ltc.Message") }}</div>
            </div>
            
            <div class="text-center"><button type="submit">{{ __("ltc.FormButton") }}</button></div>
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




