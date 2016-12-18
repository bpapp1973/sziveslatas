@extends('layouts.app')
@section('css')
<style type="text/css">
/* This rule is read by Galleria to define the gallery height: */
#galleria {
	height:480px;
	width:480px;
}
</style>
@endsection
@section('scripts')
<!-- load jQuery -->
<!-- load Galleria -->
<script src="{!! asset('galleria/galleria-1.4.7.js') !!}"></script>
<script src="{!! asset('galleria/themes/classic/galleria.classic.js') !!}"></script>
<script src="{!! asset('js/galleria-config.js') !!}"></script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container-fluid">
		@include('flash::message')

        <div class="input-group">
			<a href="#description" class="btn btn-default">Leírás</a>
			<a href="#menucards"   class="btn btn-default">Menüajánlatok</a>
			<a href="#rooms"       class="btn btn-default">Helyiségek</a>
			<a href="#map"         class="btn btn-default">Térkép</a>
        </div>

		<h1>{!! Form::label(null, $ads->title) !!}</h1>
		<div class="row">
			<div class="col-md-6">
				<div id="galleria">
					@for($i = 0; $i < count($images); $i++)
					
					<a href="{{ $images[$i] }}">
						<img
						src="{{ $images[$i] }}"
						>
					</a>
					@endfor
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">Hirdető</div>
					<div class="col-md-3"><a href="{!! url('/companies/'.$ads->company->id.'/profile') !!}">{!! $ads->company->name !!}</a></div>
				</div>
				<div class="row">
					<div class="col-md-3">Website</div>
					<div class="col-md-3"><a href="{!!$ads->website!!}">{!!$ads->website!!}</a></div>
				</div>
				<div class="row">
					<div class="col-md-3">Kapcsolattartó</div>
					<div class="col-md-3">{!! $ads->responsible !!}</div>
				</div>
				<div class="row">
					<div class="col-md-3">Email</div>
					<div class="col-md-3"><a href="mailto:{!! $ads->email !!}">{!! $ads->email !!}</a></div>
				</div>
				<div class="row">
					<div class="col-md-3">Telefon</div>
					<div class="col-md-3"><a href="tel:{!! $ads->phone !!}">{!! $ads->phone !!}</a></div>
				</div>
				<div class="row">
					<div class="col-md-3">Megye</div>
					<div class="col-md-3">{!! $ads->city->county->name !!}</div>
				</div>
				<div class="row">
					<div class="col-md-3">Város</div>
					<div class="col-md-3">{!! $ads->city->name !!}</div>
				</div>
				<div class="row">
					<div class="col-md-3">Cím</div>
					<div class="col-md-3">{!! $ads->address !!}</div>
				</div>
				
			</div>
		</div>
			<div id="description" class="mbr-section mbr-section__container mbr-section__container--middle">
			    <div class="container">
			        <div class="row">
			            <div class="col-xs-12 text-xs-center">
			                <h3 class="mbr-section-title display-2">Leírás</h3>
			            </div>
			        </div>
			    </div>
			</div>
			{!! $ads->description !!}

			<section id="menucards" class="mbr-section" id="pricing-table2-3" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
			    <div class="mbr-section mbr-section__container mbr-section__container--middle">
			        <div class="container">
			            <div class="row">
			                <div class="col-xs-12 text-xs-center">
			                    <h3 class="mbr-section-title display-2">Menüajánlataink</h3>
			                    <small class="mbr-section-subtitle">Az alábbi menüajánlatok közül választhatsz</small>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="mbr-section mbr-section-nopadding mbr-price-table">
			        <div class="row">
			        	@for($i = 0; $i < count($menucards); $i++)
			            <div class="col-xs-12  col-md-6 col-xl-3">
			                <div class="mbr-plan card text-xs-center">
			                    <div class="mbr-plan-header card-block bg-primary">
			                    	<div class="mbr-plan-label">{!! $menucards[$i]->label !!}</div>
			                        <div class="card-title">
			                            <h3 class="mbr-plan-title">{!! $menucards[$i]->title !!}</h3>
			                            <small class="mbr-plan-subtitle">{!! $menucards[$i]->subtitle !!}</small>
			                        </div>
			                        <div class="card-text">
			                            <div class="mbr-price">
			                                <span class="mbr-price-figure" style="font-size: 2em">{!! $menucards[$i]->price !!}</span><br/><br/>
			                                <span class="mbr-price-value">Ft</span>
			                                <small class="mbr-price-term">/fő</small>
			                            </div>
			                            <small class="mbr-plan-price-desc">{!! $menucards[$i]->pricedesc !!}</small>
			                        </div>
			                    </div>
			                    <div class="mbr-plan-body card-block">
			                        <div class="mbr-plan-btn">
			                            <a class="btn btn-black btn-black-outline" onclick="showMenucard({!! $i !!})" data-toggle="modal" data-target="#showMenucard">Részletek</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            @endfor
			        </div>
			    </div>
			</section>

			<section id="rooms" class="mbr-cards mbr-section mbr-section-nopadding" id="features3-n" style="background-color: rgb(255, 255, 255);">
			    <div class="mbr-section mbr-section__container mbr-section__container--middle">
			        <div class="container">
			            <div class="row">
			                <div class="col-xs-12 text-xs-center">
			                    <h3 class="mbr-section-title display-2">Helyiségek</h3>
			                    <small class="mbr-section-subtitle">Az alábbi helyiségekben tarthatod meg a rendeszvényedet</small>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="mbr-cards-row row">
			    	@for($i = 0; $i < count($rooms); $i++)
			        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
			            <div class="container">
			                <div class="card cart-block">
			                    <div class="card-block">
			                        <h4 class="card-title">{!! $rooms[$i]->name !!}</h4>
			                        <h5 class="card-subtitle">Terület: {!! $rooms[$i]->area !!}</h5>
			                        <h5 class="card-subtitle">Férőhelyek: {!! $rooms[$i]->seats !!}</h5>
			                        <h5 class="card-subtitle">Felszerelés: {!! $rooms[$i]->assets !!}</h5>
			                        <p class="card-text">{!! $rooms[$i]->description !!}</p>
			                        <div class="card-btn" onclick="showRoom({!!$i!!})" data-toggle="modal" data-target="#showRoom"><a class="btn btn-primary">Részletek</a></div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        @endfor
			    </div>
			</section>


		    <section id="map" class="mbr-section mbr-section__container" id="map2-c" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 80px;">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12">
		                    <div class="mbr-map">
		                        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_MAPS_EMBED_API_KEY') }}&amp;q={{ $ads->city->name }}, {{ $ads->address }}&language=hu" allowfullscreen="true"></iframe>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		</div>
	</div>


{!! Form::hidden('hiddenrooms', json_encode($rooms), ['id' => 'hiddenrooms']) !!}
{!! Form::hidden('hiddenmenucards', json_encode($menucards), ['id' => 'hiddenmenucards']) !!}

@include('models.rooms.modal_show')
@include('js.rooms')

@include('models.menucards.modal_show')
@include('js.menucards')

@endsection