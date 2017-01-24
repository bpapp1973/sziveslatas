@extends('layouts.app') @section('css')
<style type="text/css">
/* Local styles*/

.image-upload > input {
    display: none;
}

.image-upload img {
    width: 15%;
    cursor: pointer;
    float: left;
}
</style>
@endsection 
@section('content') 
@include('flash::message')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        @if (Auth::guest()) @include('auth.login') @else 
        <h1>{!! Form::label(null, $companies->title) !!}</h1>
        <h4>{!! Form::label(null, $companies->name) !!}</h4> 

        <a href=# data-toggle="tooltip" title="Logo lecserélése">
            <img id="logo" name="logo" class="logoUpload" data-toggle="modal" data-target="#imageUpload" data-id="logo" hspace="12" src="{{ $logo }}" style="cursor: pointer; float:left; height:200px; width:15%"/>
        </a>

        <a href='https://www.google.hu/maps/place/{{ $companies->city->name }}, {{ $companies->address }}' target="_blank" data-toggle="tooltip" title="Térkép">
            <img hspace="12" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $companies->city->name }}, {{ $companies->address }}&size=273x205&markers=color:red%7Clabel:A%7C{{ $companies->city->name }}, {{ $companies->address }}&key={{ env('GOOGLE_MAPS_API_KEY') }}" style="float:right; height:200px; width:20%" />
        </a>
        </br>
        <table border="0" cellpadding="5" cellspacing="5" style="cursor: pointer; margin-left:auto; margin-right:auto; width:60%">
            <tbody>
                <tr>
                    <td style="width:35%">Kapcsolattart&oacute;</td>
                    <td>{!! Form::label(null, $companies->contact) !!}</td>
                </tr>
                <tr>
                    <td>Város</td>
                    <td>{!! Form::label(null, $companies->city->name) !!}</td>
                </tr>
                <tr>
                    <td>Cím</td>
                    <td>{!! Form::label(null, $companies->address) !!}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{!! Form::label(null, $companies->email) !!}</td>
                </tr>
                <tr>
                    <td>Telefon</td>
                    <td>{!! Form::label(null, $companies->phone) !!}</td>
                </tr>
                <tr>
                    <td>Web</td>
                    <td>{!! Form::label(null, $companies->website) !!}</td>
                </tr>
            </tbody>
        </table>
        <br/>
        <h3>Bemutatkozás</h3> {!! Form::model($companies, ['method' => 'patch', 'route' => ['companies.update.profile', $companies->id]]) !!} {{ csrf_field() }}
        <div class="form-group {{ $errors->has('desc') ? ' has-error' : '' }}">
            {!! Form::textarea('desc', $companies->description, ['class' => 'ckeditor']) !!}
            <script type="text/javascript">
            CKEDITOR.inline('desc');
            </script>
            @if ($errors->has('desc'))
            <span class="help-block">
                <strong>{{ $errors->first('desc') }}</strong>
            </span> 
            @endif
        </div>
        <br/>
        <div class="form-group">
            <div class="col-md-6">
                {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
<!--
        <h3>Kiemelt ajánlataink</h3>
        @foreach($companies->ads as $ad)
            <div class="row">
                {!! Form::model($ad, ['route' => ['ads.update', $ad->id], 'method' => 'patch']) !!}
                    <div class="col-md-10">
                        <a href="{!! route('ads.show', [$ad->id]) !!}">{!! $ad->title !!}</a>
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('highlighted', abs($ad->highlighted-1), ['id' => 'highlighted']) !!}
                        @if($ad->highlighted==0)
                            <span class="fa fa-unchecked glyphicon glyphicon-unchecked"></span>
                        @else
                            <span class="fa fa-check glyphicon glyphicon-check"></span>
                        @endif
                    </div>
                {!! Form::close() !!}
            </div>
        @endforeach
-->
    @endif
    </div>
</div>
<div id="imageUpload" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Képfeltöltés</h4>
            </div>
            <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'companies.image', 'files'=>true]) !!}

                        {!! Form::hidden('container_type', 'company') !!}
                        {!! Form::hidden('container_id', $companies->id) !!}
                        {!! Form::hidden('form', 'description') !!}
                        {!! Form::hidden('control_id', null, ['id'=>'control_id', 'name'=>'control_id']) !!}
                        {!! Form::hidden('title', $companies->name, ['id'=>'title', 'class' => 'form-control']) !!}
                        {!! Form::hidden('description', null, ['id'=>'description', 'class' => 'form-control']) !!}
<!--
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
-->                       
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            {!! Form::label('image', 'Válassz egy képet', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('image', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Feltöltés', ['class' => 'btn btn-primary']) !!}
                            {!! Form::submit('Mégsem', ['data-dismiss'=>'modal', 'class' => 'nav-link btn btn-warning-outline btn-warning']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection 
@section('scripts')
<script type="text/javascript">

    $("#logo").on('click',function (e) {
        $('#control_id').val('logo');
    });

</script>
@endsection
