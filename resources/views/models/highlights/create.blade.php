@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Új kiemelés létrehozása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'highlights.store']) !!}

                        @include('models.highlights.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
