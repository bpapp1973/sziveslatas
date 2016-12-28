@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Favourites</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('favourites.create') !!}">Új</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.favourites.table')
        
@endsection
