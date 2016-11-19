<!DOCTYPE html>
<html>
  <head>
    <!-- Site made with Mobirise Website Builder v3.8.5, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.8.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ url('/') }}/assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/tether/tether.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/socicon/css/socicon.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/theme/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel='stylesheet' href='{{ url('/') }}/assets/bootstrap-glyphicons/css/bootstrap.min.css' />
    <link rel='stylesheet' href='{{ url('/') }}/assets/gill-sans-ultrabold/stylesheet.css' />
    <style type="text/css">
    /* Local styles*/
    /* #5cb85c */
    </style>
    @yield('css')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ url('/') }}/editor/ckeditor/ckeditor.js"></script>
</head>
  <body>
    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
    <input name="cookieData" type="hidden" data-cookie-text="Ez a weboldal cookie-kat (sütiket) használ azért, hogy weboldalunk használata során a lehető legjobb élményt tudjuk biztosítani. <br/>
    A weboldalunkon történő további böngészéssel hozzájárul a cookie-k használatához. <a href='privacy.html'>További információkért kattintson ide!</a>.">
    <section id="menu-1">
      <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">
          <div class="mbr-table">
            <div class="mbr-table-cell" style="width: 10%">
              <div class="navbar-brand">
                <a class="navbar-caption text-white" style="font-family: Gill Sans Ultra; font-size: 33px;" href="{{ url('/') }}">Sziveslátás.hu</a>
              </div>
            </div>
            <div class="mbr-table-cell">
              <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
              <div class="hamburger-icon"></div>
              </button>
              <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                  <li class="nav-item"><a class="nav-link link" href="{!! url('/') !!}#msg-box8-5">Ajánlatok</a></li>
                  <li class="nav-item"><a class="nav-link link" href="{!! url('/') !!}#form1-g">Kapcsolat</a></li>
                @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link link" href="{{ url('/login') }}">Belépés</a></li>
                  <li class="nav-item"><a class="nav-link link" href="{{ url('/register') }}">Regisztráció</a></li>
                @else
                @if (Auth::user()->roles_id==1)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Felhasználó</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/companies/create') !!}">Hirdető hozzáadása</a>
                    <a class="dropdown-item" href="#">Feltöltés alatt</a>
                  </div>
                </li>
                @elseif (Auth::user()->roles_id==2)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Hirdető</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id.'/edit') !!}">Adatok szerkesztése</a>
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id) !!}">Profil</a>
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id).'/profile' !!}">Profil szerkesztése</a>
                    <a class="dropdown-item" href="{!! url('/ads/create') !!}">Hirdetés feladása</a>
                    <a class="dropdown-item" href="{!! url('/ads/index') !!}">Hirdetések</a>
                    <a class="dropdown-item" href="#">Feltöltés alatt</a>
                  </div>
                </li>
                @elseif (Auth::user()->roles_id==3)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Operátor</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Feltöltés alatt</a>
                  </div>
                </li>
                @elseif (Auth::user()->roles_id==4)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Adminisztrátor</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/users/index') !!}">Felhasználók</a>
                    <a class="dropdown-item" href="{!! url('/companies/index') !!}">Hirdetők</a>
                    <a class="dropdown-item" href="{!! url('/ads/index') !!}">Hirdetések</a>
                    <a class="dropdown-item" href="#">Feltöltés alatt</a>
                  </div>
                </li>
                @endif
                <li class="nav-item dropdown open">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">Felhasználó</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/users/'.Auth::user()->id.'/edit') !!}">Adatmódosítás</a>
                    <a class="dropdown-item" href="{{ route('pwdchange') }}">Jelszó megváltoztatása</a>
                    <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kilépés
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
              @endif
              <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
              <div class="close-icon"></div>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <!-- Page Content -->
    @yield('content')
    <!-- Scripts -->
    <script src="{{ url('/') }}/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/tether/tether.min.js"></script>
    <script src="{{ url('/') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="{{ url('/') }}/assets/viewportChecker/jquery.viewportchecker.js"></script>
    <script src="{{ url('/') }}/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
    <script src="{{ url('/') }}/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
    <script src="{{ url('/') }}/assets/dropdown/js/script.min.js"></script>
    <script src="{{ url('/') }}/assets/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="{{ url('/') }}/assets/jarallax/jarallax.js"></script>
    <script src="{{ url('/') }}/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="{{ url('/') }}/assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
    <script src="{{ url('/') }}/assets/masonry/masonry.pkgd.min.js"></script>
    <script src="{{ url('/') }}/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('/') }}/assets/social-likes/social-likes.js"></script>
    <script src="{{ url('/') }}/assets/theme/js/script.js"></script>
    <script src="{{ url('/') }}/assets/mobirise-slider-video/script.js"></script>
    <script src="{{ url('/') }}/assets/mobirise-gallery/script.js"></script>
    <script src="{{ url('/') }}/assets/formoid/formoid.min.js"></script>
    
    @yield('scripts')
  </body>
</html>