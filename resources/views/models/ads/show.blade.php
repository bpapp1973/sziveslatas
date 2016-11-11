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
			<?php
			echo $ads->description;
			?>
			<div class="form-group">
				<a href="{!! url($_SERVER['HTTP_REFERER']) !!}" >Vissza</a>
			</div>
		</div>
	</div>
	@endsection