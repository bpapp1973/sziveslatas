@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
	    <div style="padding: 3em; background-color: #ffffff">
	        <h1 class="pull-left">Kategóriák</h1>
	        @if(Auth::user())
	        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('categories.create') !!}">Új</a>
	        @endif
	        <div class="clearfix"></div>

	        @include('flash::message')

	        <div class="clearfix"></div>

	        @include('models.categories.table')
       </div>
    </div>
</div> 
@endsection
