<!-- Title Field -->
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
	{!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Filepath Field -->
<div class="form-group{{ $errors->has('filepath') ? ' has-error' : '' }}">
    {!! Form::label('filepath', 'Filepath', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('filepath', null, ['class' => 'form-control']) !!}
        @if ($errors->has('filepath'))
            <span class="help-block">
                <strong>{{ $errors->first('filepath') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Container Type Field -->
<div class="form-group{{ $errors->has('container_type') ? ' has-error' : '' }}">
    {!! Form::label('container_type', 'Container Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('container_type', null, ['class' => 'form-control']) !!}
        @if ($errors->has('container_type'))
            <span class="help-block">
                <strong>{{ $errors->first('container_type') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Container Id Field -->
<div class="form-group{{ $errors->has('container_id') ? ' has-error' : '' }}">
	{!! Form::label('container_id', 'Container Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('container_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('container_id'))
            <span class="help-block">
                <strong>{{ $errors->first('container_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Form Field -->
<div class="form-group{{ $errors->has('form') ? ' has-error' : '' }}">
    {!! Form::label('form', 'Form', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('form', null, ['class' => 'form-control']) !!}
        @if ($errors->has('form'))
            <span class="help-block">
                <strong>{{ $errors->first('form') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Control Id Field -->
<div class="form-group{{ $errors->has('control_id') ? ' has-error' : '' }}">
    {!! Form::label('control_id', 'Control Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('control_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('control_id'))
            <span class="help-block">
                <strong>{{ $errors->first('control_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Mégsem</a>
</div>
