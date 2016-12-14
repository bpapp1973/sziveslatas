@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
		<h1 class="pull-left">Hirdetések</h1>
		@if (Auth::user())
			<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ads.create') !!}">Új</a>
		@endif
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		@include('models.ads.table')
	</div>
</div>
@endsection