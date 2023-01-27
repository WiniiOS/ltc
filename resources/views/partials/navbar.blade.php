<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <div class="logo me-auto">
      <a href="{{ route('home') }}"><img src="imports/assets/img/logo.png" alt="" class="img-fluid"><span> &nbsp; LTC GROUP SARL</span> </a>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero"> {{ __("ltc.Home") }} </a></li>
        <li><a class="nav-link scrollto" href="#about"> {{ __("ltc.About") }} </a></li>
        <li><a class="nav-link scrollto" href="#services">{{ __("ltc.Services") }}</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">{{ __("ltc.Portfolio") }}</a></li>
        <li><a class="nav-link scrollto" href="#team">{{ __("ltc.Team") }}</a></li>
        <li><a class="nav-link scrollto" href="#contact">{{ __("ltc.Contact") }}</a></li>

        <li class="dropdown"><a href="#"><span>&#127760; {{ __("ltc.Language") }}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="?locale=en"> 🇺🇸{{ __("ltc.En") }} </a></li>
            <li><a href="?locale=fr"> 🇫🇷{{ __("ltc.Fr") }} </a></li>
          </ul>
        </li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>

    </nav>
    <!-- .navbar -->

  </div>
</header>
