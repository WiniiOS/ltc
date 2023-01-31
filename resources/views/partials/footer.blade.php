<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>LTC GROUP SARL</h3>
            <p>
            <li>{{ __("ltc.Box1Desc1") }}</li>  <br>
            <li>Immeuble Saker Ndokotti Douala, Cameroun</li> <br><br>
            <strong>Phone:</strong> <a style="color:white;" href="tel:+237 673 209 375"> +237 673 209 375 </a><br> <a style="color:white;" href="tel:+237 691 371 922">+237 691 371 922</a> <br> 
            <strong>Email:</strong> <a style="color:white;" href="mailto:ltcgroup@cyberjob.cm"><span>ltcgroup@cyberjob.cm</span> </a>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/LTCGroupSARL" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{ __("ltc.header1") }}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.Useful1") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.Useful2") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.Useful3") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.Useful4") }}</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{ __("ltc.header2") }}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService1") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService2") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService3") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService4") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService5") }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("ltc.LinkService6") }}</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>{{ __("ltc.header3") }}</h4>
            <p>{{ __("ltc.desc3") }}</p>
            
            <form action="{{ route('newsletter') }}" method="post">
              @csrf
              <input placeholder='votre.email@gmail.com' type="email" name="email"><input type="submit" value="Souscrire">
              
            </form>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                @endforeach
            @endif
          

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LTC Group Sarl</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.ltcgroup.cm/">LTC GROUP SARL</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>