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


<!-- Name Field -->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tags.index') !!}" class="btn btn-default">Mégsem</a>
</div>
