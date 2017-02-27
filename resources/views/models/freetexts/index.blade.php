@extends('layouts.app') @section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
        @if (Auth::guest()) @include('auth.login') @else
        <div style="padding: 3em; background-color: #ffffff">
            <h1 class="pull-left">Szöveges dokumentumok</h1> @if(Auth::user() && Auth::user()->roles_id==4)
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('freetexts.create') !!}">Új</a> @endif
            <div class="clearfix"></div>
            @include('flash::message')
            <div class="clearfix"></div>
            @include('models.freetexts.table')
        </div>
        @endif
    </div>
</div>
@endsection
