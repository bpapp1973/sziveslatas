@extends('layouts.app')

@section('content')

<div id="page-content-wrapper" style="padding-top: 6em">
	<div class="container mbr-section-full">
	<div style="padding: 3em; background-color: #ffffff">
        <h1 class="pull-left">Megrendeléseim</h1>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('models.orders.table')
	</div>
	</div>
</div>        

@endsection
