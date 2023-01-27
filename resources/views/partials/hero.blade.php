<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('imports/assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"> {{ __("ltc.Slide1Title") }} </h2>
                <p class="animate__animated animate__fadeInUp"> {{ __("ltc.Slide1Description") }} </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ __("ltc.SlideButton") }}</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('imports/assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">{{ __("ltc.Slide2Title") }} </h2>
                <p class="animate__animated animate__fadeInUp"> {{ __("ltc.Slide2Description") }} </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ __("ltc.SlideButton") }}</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('imports/assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">{{ __("ltc.Slide3Title") }}</h2>
                <p class="animate__animated animate__fadeInUp">{{ __("ltc.Slide3Description") }} </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ __("ltc.SlideButton") }}</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Hero -->