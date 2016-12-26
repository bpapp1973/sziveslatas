@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Order Details</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('orderDetails.create') !!}">Új</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.order_details.table')
        
@endsection
