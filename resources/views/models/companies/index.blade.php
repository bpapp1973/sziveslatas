@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
		<h1 class="pull-left">Hirdetők</h1>
		<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('companies.create') !!}">Új</a>
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		@include('models.companies.table')
	</div>
</div>
@endsection