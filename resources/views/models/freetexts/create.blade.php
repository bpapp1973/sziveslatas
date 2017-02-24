@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
        <div style="padding: 3em; background-color: #ffffff">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Új szöveges dokumentum létrehozása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'freetexts.store']) !!}

                        @include('models.freetexts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
