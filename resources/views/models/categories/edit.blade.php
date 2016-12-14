@extends('layouts.app')

@section('content')
    <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kategória szerkesztése</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => 'patch']) !!}

                    @include('models.categories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
