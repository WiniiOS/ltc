<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>LTC GROUP</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +237 691 371 922<br> 670 129 795
              <strong>Email:</strong> ltcgroup@cyberjob.cm <br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/LTCGroupSARL" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Vente & Recharge Visa UBA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Développement web & mobile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing Digital</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design Graphique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Vente et achats de produits electroniques</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Go-Livraison</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre Newsletter</h4>
            <p>Inscrivez vous à notre newsletter pour etre informé de nos promotions</p>
            <form action="{{ route('newsletter') }}" method="post">
              @csrf
              <input placeholder='votre.email@gmail.com' type="email" name="email"><input type="submit" value="Souscrire">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LTC Group</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.ltcgroup.cm/">LTC GROUP SARL</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>