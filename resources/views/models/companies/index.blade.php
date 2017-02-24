@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container mbr-section-full">
	<div style="padding: 3em; background-color: #ffffff">
		<h1 class="pull-left">Hirdetők</h1>
		@if(Auth::user())
		<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('companies.create') !!}">Új</a>
		@endif
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		@include('models.companies.table')
	</div>
	</div>
</div>
@endsection