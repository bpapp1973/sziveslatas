@extends('layouts.app')
@section('scripts')
<script>
$('#county').on('change',function (e) {
var county = e.target.value;
//ajax
$.get('{{ url('/') }}/city-dropdown?county=' + county, function (data) {
$('#city').empty();
$.each(data , function (index, cityObj) {
$('#city').append('<option value="'+cityObj.id+'">'+cityObj.name+'</option>');
});
});
});
</script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Új felhasználó létrehozása</div>
                <div class="panel-body">
                    @include('core-templates::common.errors')
                    {!! Form::open(['route' => 'users.store']) !!}
                    @include('models.users.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection