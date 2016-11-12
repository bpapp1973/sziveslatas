@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{!! asset('assets/bootstrap-modal/css/bootstrap.min.css') !!}" /> @endsection @section('content') @include('flash::message')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <h1>{!! Form::label(null, $companies->title) !!}</h1>
        <h4>{!! Form::label(null, $companies->name) !!}</h4>
        <a href=# data-toggle="tooltip" title="Logo lecserélése">
            <img id="logo" name="logo" class="logoUpload" data-toggle="bs-modal" data-target="#imageUpload" data-id="logo" hspace="12" src="{{ $logo }}" style="cursor: pointer; float:left; height:200px; width:15%" />
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
            </span> @endif
        </div>
        <div class="form-group">
            <div class="col-md-6">
                {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        <br/>
        <h3>A cég kiemelt ajánlatai</h3>
        <p>...ide jönnek majd a képek...</p>
    </div>
</div>
<div id="imageUpload" class="bs-modal">
    <div class="bs-modal-dialog">
        <div class="bs-modal-content">
            <div class="bs-modal-header">
                <h4 class="bs-modal-title">Képfeltöltés</h4>
            </div>
            <div class="bs-modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'companies.image', 'files'=>true]) !!} {!! Form::hidden('container_type', 'company') !!} {!! Form::hidden('container_id', $companies->id) !!} {!! Form::hidden('form', 'description') !!} {!! Form::hidden('control_id', null, ['id'=>'control_id', 'name'=>'control_id']) !!}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!} @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!} @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            {!! Form::label('image', 'Válassz egy képet', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('image', null, ['class' => 'form-control']) !!} @if ($errors->has('image'))
                                <span class="help-block">
                               <strong>{{ $errors->first('image') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('dummy', ' ', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <div class="input-group">
                                    {!! Form::submit('Mégsem', ['data-dismiss'=>'bs-modal', 'class' => 'btn btn-default']) !!} {!! Form::submit('Feltöltés', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection @section('scripts')
<script src="{{ url('/') }}/assets/bootstrap-modal/js/bootstrap.min.js"></script>
<script type="text/javascript">
$("#logo").on('click', function(e) {
    $('#control_id').val('logo');
    // $("#imageUpload").modal('show');
});
</script>
@endsection
