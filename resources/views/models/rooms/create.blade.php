@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Új helyiség hozzáadása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'rooms.store']) !!}

                        @include('models.rooms.fields')
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('ads.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
