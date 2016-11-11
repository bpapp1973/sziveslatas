@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Counties</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('counties.create') !!}">Új</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.counties.table')
        
@endsection
