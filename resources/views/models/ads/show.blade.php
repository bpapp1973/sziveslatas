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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<!-- load Galleria -->
<script src="{!! asset('galleria/galleria-1.4.7.js') !!}"></script>
<script src="{!! asset('galleria/themes/classic/galleria.classic.js') !!}"></script>
<script src="{!! asset('js/galleria-config.js') !!}"></script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
		@include('flash::message')
		<h1>{!! Form::label(null, $ads->title) !!}</h1>
		<div class="row">
			<div class="media">
				<div class="media-left">
					<div id="galleria">
						@foreach($images as $image)
						<a href="{{ $image }}">
							<img
							src="{{ $image }}"
							>
						</a>
						@endforeach
					</div>
				</div>
				<div class="media-body">
					<table border="0" cellpadding="5" cellspacing="5" style="margin-left:auto; margin-right:auto; width:45%" >
						<tbody>
							<tr>
								<td style="width:35%">Hirdető</td>
								<td><a href="{!! url('/companies/'.$ads->company->id.'/profile') !!}">{!! $ads->company->name !!}</a></td>
							</tr>
							<tr>
								<td style="width:35%">Website</td>
								<td><a href="{!!$ads->website!!}">{!!$ads->website!!}</a></td>
							</tr>
							<tr>
								<td style="width:35%">Kapcsolattart&oacute;</td>
								<td>{!! $ads->responsible !!}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td><a href="mailto:{!! $ads->email !!}">{!! $ads->email !!}</a></td>
							</tr>
							<tr>
								<td>Telefon</td>
								<td><a href="tel:{!! $ads->phone !!}">{!! $ads->phone !!}</a></td>
							</tr>
							<tr>
								<td>Megye</td>
								<td>{!! $ads->city->county->name !!}</td>
							</tr>
							<tr>
								<td>Város</td>
								<td>{!! $ads->city->name !!}</td>
							</tr>
							<tr>
								<td>Cím</td>
								<td>{!! $ads->address !!}</td>
							</tr>
							<tr>
								<td/>
									<td>
										<a href='https://www.google.hu/maps/place/{{ $ads->city->name }}, {{ $ads->address }}' target="_blank" data-toggle="tooltip" title="Térkép">
											<img hspace="12" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $ads->city->name }}, {{ $ads->address }}&size=273x205&markers=color:red%7Clabel:A%7C{{ $ads->city->name }}, {{ $ads->address }}&key={{ env('GOOGLE_MAPS_API_KEY') }}" />
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<h3>Leírás</h3>
			{!! $ads->description !!}
			<div class="form-group">
				<a href="{!! url($_SERVER['HTTP_REFERER']) !!}" >Vissza</a>
			</div>
		</div>
	</div>

			<section class="mbr-section" id="pricing-table2-3" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
                  <h3 class="mbr-section-title display-2">Menüajánlat</h3>
                  <small class="mbr-section-subtitle">Az alábbi menüajánlatok válaszhatók</small>
              </div>
          </div>
      </div>
    </div>

    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">

            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block bg-primary">
                      <div class="card-title">
                        <h3 class="mbr-plan-title">Menü 1</h3>
                        <small class="mbr-plan-subtitle">rövid leírás</small>
                      </div>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-figure">5000</span>
                            <span class="mbr-price-value">Ft</span>
                            <small class="mbr-price-term">/fő</small>
                          </div>
                          <small class="mbr-plan-price-desc">More details</small>
                      </div>
                    </div>
                    <div class="mbr-plan-body card-block">
                      <div class="mbr-plan-list">
                      	<ul class="list-group list-group-flush">
                      		<li class="list-group-item">32 GB storage</li>
                      		<li class="list-group-item">Unlimited users</li>
                      		<li class="list-group-item">15 GB bandwidth</li>
                      	</ul>
                      </div>
                      <div class="mbr-plan-btn">
                      	<a href="https://mobirise.com" class="btn btn-black btn-black-outline">DEMO</a>
                      </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>
@endsection