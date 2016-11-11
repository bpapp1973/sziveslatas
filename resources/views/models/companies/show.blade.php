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
		<?php
		echo $companies->description;
		?>
		<h3>A cég kiemelt ajánlatai</h3>
		<p>...ide jönnek majd a képek...</p>
		<br/>
		<div class="form-group">
			<a href="{!! url($_SERVER['HTTP_REFERER']) !!}" >Vissza</a>
		</div>
	</div>
</div>
@endsection