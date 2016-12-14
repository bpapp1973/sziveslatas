@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
            <div class="panel panel-default">
                <div class="panel-heading">Menucards szerkesztése</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($menucards, ['route' => ['menucards.update', $menucards->id], 'method' => 'patch']) !!}

                    @include('models.menucards.fields')

                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
