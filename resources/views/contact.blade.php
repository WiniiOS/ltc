@extends('layouts.app')

@section('content')
            
<main id="main">

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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
            </form>
        </div>

        </div>

    </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->    

@endsection




