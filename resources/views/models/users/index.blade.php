@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
		<h1 class="pull-left">Felhasználók</h1>
		<!--<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Új</a>-->
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		@include('models.users.table')
	</div>
</div>
@endsection