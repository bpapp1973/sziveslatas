@extends('layouts.app')
@section('css')
<style>
.search-form {
position: relative;
padding-top: 6em;
padding-bottom: 0.5em;
background-position: 50% 50%;
background-repeat: no-repeat;
background-size: cover;
}
.col-xs-offset-0_5 {
    margin-left: 5px;
    margin-bottom: 5px;
}
.bp-div-bd-image{
    background-repeat: no-repeat;
    background-size: cover;
    color:white; 
    padding: 10px; 
    border: 1px solid grey; 
    border-radius: 5px; 
    height: 350px; 
    width: 22%;
}
.bp-carousel-title {
  font-family: Montserrat;
  font-size: 0.9em;
  position: absolute;
  display: block;
  width: 100%;
  bottom: 0px;
  left: 75%;
  padding: 1rem;
  color: #fff;
  background: -webkit-linear-gradient(left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85)) !important;
  background: -moz-linear-gradient(left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85)) !important;
  background: -o-linear-gradient(left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85)) !important;
  background: -ms-linear-gradient(left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85)) !important;
  background: linear-gradient(left, rgba(85, 67, 70, 0.85), rgba(69, 80, 91, 0.85)) !important;
  -webkit-transition: .2s background ease-in-out;
  transition: .2s background ease-in-out;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 0rem;
    padding-right: 0rem
}
</style>
@endsection
@section('content')
<div class="search-form">
    {!! Form::open(['url' => '#', 'method' => 'get']) !!}
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-xs-center">
                <div class="form-group">
                    <div class="col-md-2">
                        {!! Form::select('parent_id', $categories, null, ['id' => 'parent_id', 'placeholder' => 'Kategória', 'class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::select('category', $subcategories, null, ['id' => 'category', 'placeholder' => 'Alkategória', 'class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('citysearch', null, ['id' => 'citysearch', 'placeholder' => 'Város', 'class' => 'typeahead form-control']) !!}
                    </div>
                    <div class=" input-group col-md-6">
                        {!! Form::text('search', null, ['placeholder' => 'Kereső', 'class' => 'form-control']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-xs" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div><!-- /input-group -->
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
<section class="mbr-gallery mbr-section mbr-section-full mbr-slider-carousel" id="gallery1-4" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    
    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="0" data-toggle="modal">
                            <img alt="" src="assets/images/bg1.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title"><strong>bg1</strong></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="1" data-toggle="modal">
                            <img alt="" src="assets/images/bg2.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title"><strong>bg2</strong></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="2" data-toggle="modal">
                            <img alt="" src="assets/images/bg3.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title"><strong>bg3</strong></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="3" data-toggle="modal">
                            <img alt="" src="assets/images/bg4.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title"><strong>bg4</strong></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="4" data-toggle="modal">
                            <img alt="" src="assets/images/bg5.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title"><strong>bg5</strong><br/>
                                új sor<br/>
                                még egy<br/>
                            </span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false">
                        <div href="#lb-gallery1-4" data-slide-to="5" data-toggle="modal">
                            <img alt="" src="assets/images/bg6.jpg">
                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">
                                <strong>bg6</strong><br/>
                                új sor<br/>
                                még egy<br/>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="0" class=" active"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="2"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="3"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="4"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-4" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="assets/images/bg1.jpg">
                            <div class="bp-carousel-title">bg1</div>
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="assets/images/bg2.jpg">
                            <div class="bp-carousel-title">bg2</div>
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="assets/images/bg3.jpg">
                            <div class="bp-carousel-title">bg3</div>
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="assets/images/bg4.jpg">
                            <div class="bp-carousel-title">bg4</div>
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="assets/images/bg5.jpg">
                            <div class="bp-carousel-title">
                                <strong>bg5</strong><br/>
                                új sor<br/>
                                még egy<br/>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="assets/images/bg6.jpg">
                            <div class="bp-carousel-title">
                                <strong>bg5</strong><br/>
                                új sor<br/>
                                még egy<br/>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-4">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-4">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-parallax-background" id="msg-box8-5" style="background-image: url(assets/images/desert.jpg); padding-top: 120px; padding-bottom: 120px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Kiemelt ajánlatok</h3>
                <div class="lead"><p>A lejobb ajánlatok egy helyen</p></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content7-a" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div>
        <div class="row" style="padding: 50px">
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg1.jpg');"><p>
                <strong>bg1</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg2.jpg');"><p>
                <strong>bg2</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg3.jpg');"><p>
                <strong>bg3</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg4.jpg');"><p>
                <strong>bg4</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg5.jpg');"><p>
                <strong>bg5</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg6.jpg');"><p>
                <strong>bg6</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg1.jpg');"><p>
                <strong>bg1</strong></p>
            </div>
            <div class="col-xs-2 col-xs-offset-0_5 lead bp-div-bd-image" style="background-image: url('assets/images/bg2.jpg');"><p>
                <strong>bg2</strong></p>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section" id="form1-g" style="background-color: rgb(200, 200, 200); padding-top: 50px; padding-bottom: 15px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Kapcsolat</h3>
                    <small class="mbr-section-subtitle">Miben segíthetünk?</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Köszönjük!</div>
                    </div>
                    <form action="https://mobirise.com/" method="post" data-form-title="CONTACT FORM">
                        <input type="hidden" value="amT8Yny8TJAnloIRJxSeheijRLoQ+j1sZBdmLEU+babj2Y9Jq+nR/kSGivNx9BXndUlQnzgdVFEQYMs56cUN/QrNhyAUa2TsCv9a1CCW1aqawzEayqbSbdtacJOzmXOU" data-form-email="true">
                        <div class="row row-sm-offset">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-g-name">Név<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-g-name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-g-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-g-email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-g-phone">Telefon</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-g-phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="form1-g-message">Üzenet</label>
                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-g-message"></textarea>
                        </div>
                        <div><button type="submit" class="btn btn-primary">Küld</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-md-padding" id="social-buttons3-e" style="background-color: rgb(46, 46, 46); padding-top: 10px; padding-bottom: 10px;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h5 class="mbr-section-title display-2">Oszd meg!</h5>
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook" title="Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter" title="Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social plusone" title="Google+">
                            <i class="socicon socicon-google"></i>
                        </span>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    Email: info@sziveslatas.hu<br>
                    Telefon: +36 (30) 123-4567
                </p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Rólunk</strong><br>
                    <a class="text-primary" href="#">Rólunk</a><br>
                    <a class="text-primary" href="#">Impresszum</a><br>
                    <a class="text-primary" href="#">Stb</a></p>
                </div>
            </div>
        </div>
    </section>
    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-j" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
        
        <div class="container">
            <p class="text-xs-center">Minden jog fenntartva (c) 2016 Sziveslatas.hu</p>
        </div>
    </footer>
</section>

<script type="text/javascript">
    var path = "{{ route('citysearch') }}";
    $('#citysearch').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });

    $('#parent_id').on('change', function(e) {
        var parent_id = e.target.value;
        //ajax
        $.get('{{ url('/') }}/category-dropdown?parent_id=' + parent_id, function(data) {
            $('#category').empty();
            $.each(data, function(index, categoryObj) {
                $('#category').append('<option value="' + categoryObj.id + '">' + categoryObj.name + '</option>');
            });
        });
    });

</script>
@endsection