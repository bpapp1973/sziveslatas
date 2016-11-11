@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Images</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('images.create') !!}">Új</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.images.table')
        
@endsection
