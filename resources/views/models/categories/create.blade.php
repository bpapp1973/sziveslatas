@extends('layouts.app')

@section('content')
    <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Új kategória létrehozása</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::open(['route' => 'categories.store']) !!}

                        @include('models.categories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
