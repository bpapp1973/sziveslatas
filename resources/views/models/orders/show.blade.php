@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 15em">
	@include('flash::message')
    @if (Auth::guest()) 
    	@include('auth.login') 
    @else 
	    @if(Auth::user()->id==$orders->company->users->first()->id)
		    @include('models.orders.show_fields')
		@else
			@include('errors.403')
		@endif
	@endif
</div>
@endsection
