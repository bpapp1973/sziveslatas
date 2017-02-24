@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
    	<div style="padding: 3em; background-color: #ffffff">
        	<div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
		    @include('models.categories.show_fields')
		    @endif
		</div>
	</div>
</div>

@endsection
