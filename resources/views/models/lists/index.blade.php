@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Lists</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('lists.create') !!}">Új</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.lists.table')
        
@endsection
