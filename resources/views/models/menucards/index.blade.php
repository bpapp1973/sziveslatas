@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Menük</h1>
        @if(Auth::user())
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('menucards.create') !!}">Új</a>
        @endif
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.menucards.table')
        
@endsection
