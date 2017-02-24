@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
    <div style="padding: 3em; background-color: #ffffff">
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

                    @include('models.categories.editfields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endif
    </div>
    </div>
    </div>
@endsection
