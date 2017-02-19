@extends('layouts.app')
@section('css')
<style type="text/css">
.col-xs-offset-0_5 {
    margin-left: 5px;
    margin-bottom: 5px;
}
.bp-div-bd-image{
    background-repeat: no-repeat;
    background-size: cover;
    color:white; 
    padding: 10px; 
    height: 300px;
}
</style>
@endsection
@section('content')
        @include('models.highlights.table')
@endsection
