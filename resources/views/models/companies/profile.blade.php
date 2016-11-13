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
        <h1>{!! Form::label(null, $companies->title) !!}</h1>
        <h4>{!! Form::label(null, $companies->name) !!}</h4> 

        {!! Form::hidden('container_type', 'company', ['id'=>'container_type', 'name'=>'container_type']) !!} 
        {!! Form::hidden('container_id', $companies->id, ['id'=>'container_id', 'name'=>'container_id']) !!} 
        {!! Form::hidden('form', 'description', ['id'=>'form', 'name'=>'form']) !!} 
        {!! Form::hidden('control_id', 'logo', ['id'=>'control_id', 'name'=>'control_id']) !!}

        <div class="image-upload">
            <label for="logo" data-toggle="tooltip" title="Logo lecserélése">
                <img id="logo1" name="logo" src="{{ $logo }}" />
            </label>
            <input id="logo" type="file" />
        </div>
        {!! Form::text('newlogo', null, ['id'=>'newlogo', 'name'=>'newlogo']) !!}
        <!--
        <a href=# data-toggle="tooltip" title="Logo lecserélése">
            <img id="logo" name="logo" class="logoUpload" data-toggle="bs-modal" data-target="#imageUpload" data-id="logo" hspace="12" src="{{ $logo }}" style="cursor: pointer; float:left; height:200px; width:15%" />
        </a>
-->
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
@endsection @section('scripts')
<script type="text/javascript">
$("#logo").on('change', function(e) {
    //companies.image
    var logo = e.target.value;
    var container_id = $("#container_id").val();
    //ajax
    $.post('{{ url(' / ') }}/companies/ximage',container_id, function(data) {
        $("#newlogo").val(data);
        alert(container_id);
    });
});
</script>
@endsection
