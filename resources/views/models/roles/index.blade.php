@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Szerepkörök</h1>
        @if(Auth::user())
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('roles.create') !!}">Új</a>
        @endif
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.roles.table')
        
@endsection
