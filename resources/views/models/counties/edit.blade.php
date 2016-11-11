@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Counties szerkesztése</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($counties, ['route' => ['counties.update', $counties->id], 'method' => 'patch']) !!}

                    @include('models.counties.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
