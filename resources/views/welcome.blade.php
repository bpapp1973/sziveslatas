@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ url('/') }}/css/hover.css" />
<style>
.search-form {
    position: relative;
    padding-top: 6em;
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
    height: 300px;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 0rem;
    padding-right: 0rem
}
.btn {
  margin-bottom: 0rem; 
}

</style>
@endsection
@section('content')

<div class="search-form">
    {!! Form::open(['url' => '/search', 'method' => 'get']) !!}
    <div class="container">
        <div class="row">
                @if(env('APP_NAME','sziveslatas.hu')=='gyertekel.hu')
                <div class="input-group col-md-12" style="background-color: #fff; border: solid 0.2rem #fa8c00; border-radius: 5px">
                @else
                <div class="input-group col-md-12" style="background-color: #fff; border: solid 0.2rem #d14841; border-radius: 5px">
                @endif
                @if($categories)
                <div class="col-md-2">
                    {!! Form::select('parent_id', $categories, null, ['id' => 'parent_id', 'placeholder' => 'Mit keres?', 'class' => 'form-control']) !!}
                </div>
                @endif
                <div class="col-md-2">
                    {!! Form::select('category', $subcategories, null, ['id' => 'category', 'placeholder' => 'Válasszon', 'class' => 'form-control']) !!}
                </div>
                <div name="whendiv" class="input-group col-md-2">
                    {!! Form::text('when', null, ['id' => 'when', 'autocomplete'=>'off','placeholder' => 'Mikor', 'class' => 'input-sm form-control']) !!}
                    <span class="input-group-addon">
                        <i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
                    </span>
                </div>
                <div class="col-md-2">
                    {!! Form::text('citysearch', null, ['id' => 'citysearch', 'autocomplete'=>'off','placeholder' => 'Város', 'class' => 'typeahead form-control']) !!}
                </div>
                @if($categories)
                <div class="col-md-2">
                @else
                <div class="col-md-4">
                @endif
                    {!! Form::text('textsearch', null, ['id' => 'textsearch', 'autocomplete'=>'off', 'placeholder' => 'Keres', 'class' => 'typeahead form-control']) !!}
                </div>
                <div class="col-md-2">
                @if(env('APP_NAME','sziveslatas.hu')=='gyertekel.hu')
                        <button class="btn btn-primary btn-block" style="padding: 0.78rem 0; border: solid 0.2rem #fa8c00;" type="submit">Keresés <span class="glyphicon glyphicon-search"></span></button>
                @else
                        <button class="btn btn-primary btn-block" style="padding: 0.78rem 0; border: solid 0.2rem #d14841;" type="submit">Keresés <span class="glyphicon glyphicon-search"></span></button>
                @endif
                </div>
            </div><!-- /input-group -->
        </div>
    </div>
    {!! Form::close() !!}
</div>
<section class="mbr-section article mbr-section-full" id="content7-a" style="padding-top: 2em; padding-bottom: 2em;">
    <div class="row" style="padding: 1em">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-4 hvr-glow">
            @if($highlights[$i]->ad)
                <a href="{!! url('/') !!}/ads/{!! $highlights[$i]->ads_id !!}">
                @if (count($highlights[$i]->ad->images)==0)
                    <img class="bp-div-bd-image" src="http://fpoimg.com/600x300?text=Kép nélkül&font=calibri">
                @else
                    <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                @endif
                <span class="mbr-gallery-title">
                    <div class="col-md-8">
                        <strong>
                            {!!  $highlights[$i]->ad->title !!}&nbsp;
                            @if($highlights[$i]->ad->discountprice)
                                <span class="glyphicon glyphicon-star badge" style="color: orange;">
                                    -{!! 100-$highlights[$i]->ad->discountprice/$highlights[$i]->ad->price*100 !!}%
                                </span>
                            @endif
                        </strong>
                        <br/>
                        {!!  $highlights[$i]->ad->summary !!}
                    </div>
                    <div class="col-md-1" style="text-align: right;">
                    @if($highlights[$i]->ad->price)
                        Ár:
                    @endif
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                        @if($highlights[$i]->ad->discountprice)
                        <strike>{!!  $highlights[$i]->ad->price !!} Ft</strike>
                        <br/>
                        <strong>{!! $highlights[$i]->ad->discountprice !!} Ft</strong>
                        @elseif($highlights[$i]->ad->price)
                        {!!  $highlights[$i]->ad->price !!} Ft
                        @endif
                    </div>
                </span>
                </a>
            @else
                <img class="bp-div-bd-image" src="http://fpoimg.com/600x300?font=calibri">
            @endif
        </div>
        @endfor
    </div>
</section>
<br/><br/>
<section class="mbr-section article article" id="msg-box8-5" style=" padding-top: 2em; padding-bottom: 2em; background-color: #6bb767;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2" style="color: #ffffff">Kiemelt ajánlatok</h3>
                <div class="lead"><p></p></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section-full" id="content7-a" style="padding-top: 2em; padding-bottom: 2em;">
    <div class="row" style="padding: 1em">
        @for ($i = 6; $i < 14; $i++)
        <div class="col-md-3 hvr-glow">
            @if($highlights[$i]->ad)
                <a href="{!! url('/') !!}/ads/{!! $highlights[$i]->ads_id !!}">
                @if (count($highlights[$i]->ad->images)==0)
                    <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?text=Kép nélkül&font=calibri">
                @else
                    <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                @endif
                <span class="mbr-gallery-title">
                    <div class="col-md-8">
                        <strong>
                            {!!  $highlights[$i]->ad->title !!} &nbsp;
                            @if($highlights[$i]->ad->discountprice)
                                <span class="glyphicon glyphicon-star badge" style="color: orange;">
                                    -{!! 100-$highlights[$i]->ad->discountprice/$highlights[$i]->ad->price*100 !!}%
                                </span>
                            @endif
                        </strong>
                        <br/>
                        {!!  $highlights[$i]->ad->summary !!}
                    </div>
                    <div class="col-md-1" style="text-align: right;">
                    @if($highlights[$i]->ad->price)
                        Ár:
                    @endif
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                        @if($highlights[$i]->ad->discountprice)
                        <strike>{!!  $highlights[$i]->ad->price !!} Ft</strike>
                        <br/>
                        <strong>{!! $highlights[$i]->ad->discountprice !!} Ft</strong>
                        @elseif($highlights[$i]->ad->price)
                        {!!  $highlights[$i]->ad->price !!} Ft
                        @endif
                    </div>
                </span>
                </a>
            @else
                <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?font=calibri">
            @endif
        </div>
        @endfor
    </div>
</section>
@if(env('APP_NAME','sziveslatas.hu')=='gyertekel.hu')
<section class="mbr-section article article" id="msg-box8-5" style="padding-top: 2em; padding-bottom: 2em; background-color: #fa8c00;">
@else
<section class="mbr-section article article" id="msg-box8-5" style="padding-top: 2em; padding-bottom: 2em; background-color: #f28281;">
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2" style="color: #ffffff">Ajánlatok</h3>
                <div class="lead"><p></p></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section-full" id="content7-a" style="padding-top: 2em; padding-bottom: 2em;">
    <div class="row" style="padding: 1em">
        @for ($i = 14; $i < 22; $i++)
        <div class="col-md-3 hvr-glow">
            @if($highlights[$i]->ad)
                <a href="{!! url('/') !!}/ads/{!! $highlights[$i]->ads_id !!}">
                @if (count($highlights[$i]->ad->images)==0)
                    <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?text=Kép nélkül&font=calibri">
                @else
                    <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                @endif
                <span class="mbr-gallery-title">
                    <div class="col-md-8">
                        <strong>
                            {!!  $highlights[$i]->ad->title !!} &nbsp;
                            @if($highlights[$i]->ad->discountprice)
                                <span class="glyphicon glyphicon-star badge" style="color: orange;">
                                    -{!! 100-$highlights[$i]->ad->discountprice/$highlights[$i]->ad->price*100 !!}%
                                </span>
                            @endif
                        </strong>
                        <br/>
                        {!!  $highlights[$i]->ad->summary !!}
                    </div>
                    <div class="col-md-1" style="text-align: right;">
                    @if($highlights[$i]->ad->price)
                        Ár:
                    @endif
                    </div>
                    <div class="col-md-3" style="text-align: right;">
                        @if($highlights[$i]->ad->discountprice)
                        <strike>{!!  $highlights[$i]->ad->price !!} Ft</strike>
                        <br/>
                        <strong>{!! $highlights[$i]->ad->discountprice !!} Ft</strong>
                        @elseif($highlights[$i]->ad->price)
                        {!!  $highlights[$i]->ad->price !!} Ft
                        @endif
                    </div>
                </span>
                </a>
            @else
                <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?font=calibri">
            @endif
        </div>
        @endfor
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

<script type="text/javascript">
    var citypath = "{{ route('citysearch') }}";
    $('#citysearch').typeahead({
        source:  function (query, process) {
        return $.get(citypath, { query: query }, function (data) {
                return process(data);
            });
        }
    });

    var textpath = "{{ route('textsearch') }}";
    $('#textsearch').typeahead({
        source:  function (query, process) {
        return $.get(textpath, { query: query }, function (data) {
                return process(data);
            });
        }
    });

    $('#parent_id').on('change', function(e) {
        var parent_id = e.target.value;
        //ajax
        $.get('{{ url('/') }}/category-dropdown?parent_id=' + parent_id, function(data) {
            $('#category').empty();
            $('#category').append('<option value="" disabled selected>Válassz</option>');
            $.each(data, function(index, categoryObj) {
                $('#category').append('<option value="' + categoryObj.id + '">' + categoryObj.name + '</option>');
            });
        });
    });

    $(function() {
        $('div[name="whendiv"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minDate: new Date(),
            locale: {
                format: "YYYY-MM-DD"
            }
 
        }, 
    function(start, end, label) {
        $('#when').val(start.format('YYYY-MM-DD'));
        });
    });
</script>
<script type="text/javascript">
    
</script>
@endsection