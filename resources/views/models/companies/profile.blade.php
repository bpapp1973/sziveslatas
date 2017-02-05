@extends('layouts.app') @section('css')
<style type="text/css">
/* Local styles*/

.image-upload > input {
    display: none;
}

.image-upload img {
    width: 15%;
    cursor: pointer;
    float: left;
}
</style>
@endsection 
@section('content') 
@include('flash::message')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        @if (Auth::guest()) @include('auth.login') @else 
        <h1>{!! Form::label(null, $companies->title) !!}</h1>
        <h4>{!! Form::label(null, $companies->name) !!}</h4> 

        <a href=# data-toggle="tooltip" title="Logo lecserélése">
            <img id="logo" name="logo" class="logoUpload" data-toggle="modal" data-target="#imageUpload" data-id="logo" hspace="12" src="{{ $logo }}" style="cursor: pointer; float:left; height:200px; width:15%"/>
        </a>

        <a href='https://www.google.hu/maps/place/{{ $companies->city->name }}, {{ $companies->address }}' target="_blank" data-toggle="tooltip" title="Térkép">
            <img hspace="12" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $companies->city->name }}, {{ $companies->address }}&size=273x205&markers=color:red%7Clabel:A%7C{{ $companies->city->name }}, {{ $companies->address }}&key={{ env('GOOGLE_MAPS_API_KEY') }}" style="float:right; height:200px; width:20%" />
        </a>
        </br>
        <table border="0" cellpadding="5" cellspacing="5" style="cursor: pointer; margin-left:auto; margin-right:auto; width:60%">
            <tbody>
                <tr>
                    <td style="width:35%">Kapcsolattart&oacute;</td>
                    <td>{!! Form::label(null, $companies->contact) !!}</td>
                </tr>
                <tr>
                    <td>Város</td>
                    <td>{!! Form::label(null, $companies->city->name) !!}</td>
                </tr>
                <tr>
                    <td>Cím</td>
                    <td>{!! Form::label(null, $companies->address) !!}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{!! Form::label(null, $companies->email) !!}</td>
                </tr>
                <tr>
                    <td>Telefon</td>
                    <td>{!! Form::label(null, $companies->phone) !!}</td>
                </tr>
                <tr>
                    <td>Web</td>
                    <td>{!! Form::label(null, $companies->website) !!}</td>
                </tr>
            </tbody>
        </table>
        <br/>
        <h3>Bemutatkozás</h3> {!! Form::model($companies, ['method' => 'patch', 'route' => ['companies.update.profile', $companies->id]]) !!} {{ csrf_field() }}
        <div class="form-group {{ $errors->has('desc') ? ' has-error' : '' }}">
            {!! Form::textarea('desc', $companies->description, ['class' => 'ckeditor']) !!}
            <script type="text/javascript">
            CKEDITOR.inline('desc');
            </script>
            @if ($errors->has('desc'))
            <span class="help-block">
                <strong>{{ $errors->first('desc') }}</strong>
            </span> 
            @endif
        </div>
        <br/>
        <div class="form-group">
            <div class="col-md-6">
                {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}

        <section id="highlights" class="mbr-cards mbr-section mbr-section-nopadding" id="features3-n" style="background-color: rgb(255, 255, 255);">
            <div class="mbr-section mbr-section__container mbr-section__container--middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h3 class="mbr-section-title display-2">Kiemelt ajánlataink</h3>
                            <small class="mbr-section-subtitle">Nézd meg a legjobb akcióinkat</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-row row">
                <div id="highlight1" class="mbr-cards-col col-xs-12 col-lg-3" style="cursor: pointer; padding-top: 80px; padding-bottom: 80px;" data-toggle="modal" data-target="#ads" data-id="{!! $companies->highlight1 !!}" data-boxid="1">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                @if (count($companies->highlight1ad->images)==0)
                                    <img class="card-img-top" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri">
                                @else
                                    <img class="card-img-top" src="{!! url('/') !!}/images/companies/{!! $companies->id !!}/{!! $companies->highlight1ad->id !!}/{!! $companies->highlight1ad->images->first()->filepath !!}">
                                @endif
                                <span class="mbr-gallery-title">
                                    <strong>{!! $companies->highlight1ad->title !!}</strong><br/>
                                    {!! $companies->highlight1ad->summary !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="highlight2" class="mbr-cards-col col-xs-12 col-lg-3" style="cursor: pointer; padding-top: 80px; padding-bottom: 80px;" data-toggle="modal" data-target="#ads" data-id="{!! $companies->highlight2 !!}" data-boxid="2">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                @if (count($companies->highlight2ad->images)==0)
                                    <img class="card-img-top" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri">
                                @else
                                    <img class="card-img-top" src="{!! url('/') !!}/images/companies/{!! $companies->id !!}/{!! $companies->highlight2ad->id !!}/{!! $companies->highlight2ad->images->first()->filepath !!}">
                                @endif
                                <span class="mbr-gallery-title">
                                    <strong>{!! $companies->highlight2ad->title !!}</strong><br/>
                                    {!! $companies->highlight2ad->summary !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="highlight3" class="mbr-cards-col col-xs-12 col-lg-3" style="cursor: pointer; padding-top: 80px; padding-bottom: 80px;" data-toggle="modal" data-target="#ads" data-id="{!! $companies->highlight3 !!}" data-boxid="3">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                @if (count($companies->highlight3ad->images)==0)
                                    <img class="card-img-top" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri">
                                @else
                                    <img class="card-img-top" src="{!! url('/') !!}/images/companies/{!! $companies->id !!}/{!! $companies->highlight3ad->id !!}/{!! $companies->highlight3ad->images->first()->filepath !!}">
                                @endif
                                <span class="mbr-gallery-title">
                                    <strong>{!! $companies->highlight3ad->title !!}</strong><br/>
                                    {!! $companies->highlight3ad->summary !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endif
    </div>
    <div id="errors"></div>
</div>
@include('models.companies.modal_imageupload')
@include('models.ads.modal_index')
@endsection 
@section('scripts')
<script type="text/javascript">

    $("#logo").on('click',function (e) {
        $('#control_id').val('logo');
    });
/*
    $(document).on("click", ".mbr-cards-col", function () {
        var hl = $(this).data('id');
        var box = $(this).data('boxid');
        //alert(box);
    });
*/
    $('#ads').on('show.bs.modal', function(e) {
        var baseUrl = '{{ url('/') }}';
        var ads_id = $(e.relatedTarget).data('id');
        var box_id = $(e.relatedTarget).data('boxid');
        var company = {!!  $companies !!};
        var ads =  {!!  $companies->ads->where('isvalid','1') !!};

        $('#ads_list').empty();
        
        for (var i = 0; i < ads.length; i++) {
            var cls="list-group-item";
            if(ads[i]["id"]==ads_id) cls+=" active";
            else if(ads[i]["highlighted"]==1) cls+=" disabled";
            else cls+=" list-group-item-success";
            $('#ads_list').append('<a href="#" class="'+cls+'">'+
                '<h4 class="list-group-item-heading">'+ads[i]["title"]+'</h4>'+
                '<p class="list-group-item-text">'+ads[i]["summary"]+'</p>'+
                '</a>'
                );
            /*
                '<a href="#" class="list-group-item">'+
                '<h4 class="list-group-item-heading">'+ads[i]["title"]+'</h4>'+
                '<p class="list-group-item-text">'+ads[i]["summary"]+'</p>'+
                '</a>'+
                );
*/
        }
    });
</script>

@endsection
