@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Új Counties létrehozása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'counties.store']) !!}

                        @include('models.counties.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
