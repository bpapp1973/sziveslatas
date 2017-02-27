@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
    <div style="padding: 3em; background-color: #ffffff">
        <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
            <div class="panel panel-default">
                <div class="panel-heading">Szöveges dokumentum szerkesztése</div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($freetext, ['route' => ['freetexts.update', $freetext->id], 'method' => 'patch']) !!}

                    @include('models.freetexts.editfields')

                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
</div>
@endsection
