@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Képek</h1>
        @if(Auth::user())
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('images.create') !!}">Új</a>
        @endif
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.images.table')
        
@endsection
