@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Kiemelések szerkesztése</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($highlights, ['route' => ['highlights.update', $highlights->id], 'method' => 'patch']) !!}

                    @include('models.highlights.editfields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
