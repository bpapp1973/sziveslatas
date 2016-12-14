@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Helyiségek</h1>
        @if(Auth::user())
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('rooms.create') !!}">Új</a>
        @endif
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.rooms.table')
        
@endsection
