@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Új Order Details létrehozása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'orderDetails.store']) !!}

                        @include('models.order_details.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
