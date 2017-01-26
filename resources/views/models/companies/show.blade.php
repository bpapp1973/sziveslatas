@extends('layouts.app')
@section('content')
@include('flash::message')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
		<h1>{!! Form::label(null, $companies->title) !!}</h1>
		<h4>{!! Form::label(null, $companies->name) !!}</h4>
		<img hspace="12" src="{{ $logo }}" style="float:left; height:100%; width:15%" />
		<a href='https://www.google.hu/maps/place/{{ $companies->city->name }}, {{ $companies->address }}' target="_blank" data-toggle="tooltip" title="Térkép">
			<img hspace="12" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $companies->city->name }}, {{ $companies->address }}&size=273x205&markers=color:red%7Clabel:A%7C{{ $companies->city->name }}, {{ $companies->address }}&key={{ env('GOOGLE_MAPS_API_KEY') }}" style="float:right; height:200px; width:20%" />
		</a>
		</br>
		<table border="0" cellpadding="5" cellspacing="5" style="margin-left:auto; margin-right:auto; width:60%" >
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
		<h3>Bemutatkozás</h3>
		{!! $companies->description !!}

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
		    	@for($i = 0; $i < count($highlights); $i++)
		        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
		            <div class="container">
		                <div class="card cart-block">
		                	<div class="card-img">
			                    @if (count($highlights[$i]->images)==0)
			                        <img class="card-img-top" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri">
			                    @else
			                        <img class="card-img-top" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->companies_id !!}/{!! $highlights[$i]->id !!}/{!! $highlights[$i]->images->first()->filepath !!}">
			                    @endif
		                	</div>
		                    <div class="card-block">
		                        <h4 class="card-title">{!! $highlights[$i]->title !!}</h4>
		                        <h5 class="card-subtitle">{!! date_format($highlights[$i]->startdate, "Y-m-d") !!} - {!! date_format($highlights[$i]->enddate, "Y-m-d") !!}</h5>
		                        <h5 class="card-subtitle">Ár: {!! $highlights[$i]->price !!} Ft</h5>
		                        <div class="card-btn"><a href="{!! route('ads.show', [$highlights[$i]->id]) !!}" class="btn btn-primary">Részletek</a></div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        @endfor
		    </div>
		</section>
		<br/>
	</div>
</div>
@endsection