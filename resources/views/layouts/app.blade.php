<!DOCTYPE html>
<html>
  <head>
    <title>{{env('APP_NAME','szíveslátás.hu')}}</title>
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />    
    <link rel='stylesheet' href='{{ url('/') }}/fullcalendar/fullcalendar.css' />


    <link rel="stylesheet" href="{{ url('/') }}/css/buttons.css">

    <style type="text/css">
    /* Local styles*/
    .btn-group-xxs>.btn,
    .btn-xxs {
        padding: 1px 5px;
        font-size: 16px;
        line-height: 1.5;
        border-radius: 3px
    }

    </style>
    @yield('css')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ url('/') }}/editor/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
    
</head>
  <body style="background-color: #EAEAEA">
    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
    <input name="cookieData" type="hidden" data-cookie-text="Ez a weboldal cookie-kat (sütiket) használ azért, hogy weboldalunk használata során a lehető legjobb élményt tudjuk biztosítani. <br/>
    A weboldalunkon történő további böngészéssel hozzájárul a cookie-k használatához. <a href='privacy.html'>További információkért kattintson ide!</a>.">
    <section id="menu-1">
      <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container-fluid">
          <div class="mbr-table">
            <div class="mbr-table-cell" style="width: 20%">
              <div class="navbar-brand">
              @if(env('APP_NAME','szíveslátás.hu')=='gyertekel.hu')
                  <a href="{{ url('/') }}" class="navbar-logo"><img src="{!! url('/') !!}/images/gyertekel_logo.png" alt="Sziveslatas" style="height: 3.75rem"></a>
              @else
                  <a href="{{ url('/') }}" class="navbar-logo"><img src="{!! url('/') !!}/images/sziveslatas_logo.png" alt="Sziveslatas" style="height: 3.75rem"></a>
              @endif
              </div>
            </div>
            <div class="mbr-table-cell">
              <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
              <div class="hamburger-icon"></div>
              </button>
              <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                  <li class="nav-item"><a class="nav-link link" href="{!! url('/') !!}/home">Kezdőlap</a></li>
                  <li class="nav-item"><a class="nav-link link" href="{!! url('/') !!}#msg-box8-5">Ajánlatok</a></li>
                  <li class="nav-item"><a class="nav-link link" href="{!! url('/') !!}#form1-g">Kapcsolat</a></li>
                @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link link" href="{{ url('/login') }}">Belépés</a></li>
                  <li class="nav-item"><a class="nav-link link" href="{{ url('/register') }}">Regisztráció</a></li>
                @else
                @if (Auth::user()->roles_id==2)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Hirdető</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id.'/edit') !!}">Adatok szerkesztése</a>
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id) !!}">Profil</a>
                    <a class="dropdown-item" href="{!! url('/companies/'.Auth::user()->companies->first()->id).'/profile' !!}">Profil szerkesztése</a>
                    <a class="dropdown-item" href="{!! url('/ads/create') !!}">Hirdetés feladása</a>
                    <a class="dropdown-item" href="{!! url('/myads') !!}">Hirdetéseim</a>
                    <a class="dropdown-item" href="{!! url('/myorders') !!}">Megrendeléseim</a>
                  </div>
                </li>
                @elseif (Auth::user()->roles_id==3)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Operátor</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/ads/index') !!}">Hirdetések</a>
                  </div>
                </li>
                @elseif (Auth::user()->roles_id==4)
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Adminisztrátor</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{!! url('/users/index') !!}">Felhasználók</a>
                    <a class="dropdown-item" href="{!! url('/companies/index') !!}">Hirdetők</a>
                    <a class="dropdown-item" href="{!! url('/ads/index') !!}">Hirdetések</a>
                    <a class="dropdown-item" href="{!! url('/highlights') !!}">Kiemelések</a>
                    <a class="dropdown-item" href="{!! url('/categories') !!}">Kategóriák</a>
                    <a class="dropdown-item" href="{!! url('/freetexts') !!}">Dokumentumok</a>
                  </div>
                </li>
                @endif
                <li class="nav-item dropdown open">
                  <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">Felhasználó</a>
                  <div class="dropdown-menu">
                    @if (Auth::user()->roles_id==1)
                    <a class="dropdown-item" href="{!! url('/companies/create') !!}">Hirdető hozzáadása</a>
                    @endif
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
    <div class="btn-back">
      <a href="{!! url()->previous() !!}" data-toggle="tooltip" data-placement="left" title="Vissza">
        <i class="glyphicon glyphicon-backward"></i>
      </a>
    </div>
    <!-- Page Content -->
    @yield('content')

    <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-i" style="background-color: rgb(46, 46, 46); padding-top: 10px; padding-bottom: 10px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <!--<div><img src="assets/images/logo.png"></div>-->
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Cím</strong><br>
                    xxxx Város<br>
                Yyyy utca nnn.</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Kapcsolat</strong><br>
                    Email: info{!! '@'.env('APP_NAME','sziveslatas.hu')!!}<br>
                    Telefon: +36 (30) 123-4567
                </p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Rólunk</strong><br>
                    <a class="text-primary" href="{!! url("/freetexts/1") !!}">Rólunk</a><br>
                    <a class="text-primary" href="{!! url("/freetexts/2") !!}">Impresszum</a><br>
                    <a class="text-primary" href="{!! url("/freetexts/3") !!}">Adatvédelmi nyilatkozat</a></p>
                </div>
            </div>
        </div>
    </section>
    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-j" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
        
        <div class="container">
            <p class="text-xs-center">Minden jog fenntartva (c) 2016 {{env('APP_NAME','szíveslátás.hu')}}</p>
        </div>
    </footer>
</section>

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
    <script src="{{ url('/') }}/js/bootstrap-ckeditor-modal-fix.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="{{ url('/') }}/js/sziveslatas.js"></script>
    <script src='{{ url('/') }}/fullcalendar/fullcalendar.js'></script>
    <script src='{{ url('/') }}/fullcalendar/locale/hu.js'></script>
    <script src='{{ url('/') }}/fullcalendar/gcal.js'></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&callback=init">
    </script>

    @yield('scripts')
  </body>
</html>