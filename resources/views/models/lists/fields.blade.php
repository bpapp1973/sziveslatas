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


<!-- Control Field -->
<div class="form-group{{ $errors->has('control') ? ' has-error' : '' }}">
    {!! Form::label('control', 'Control', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('control', null, ['class' => 'form-control']) !!}
        @if ($errors->has('control'))
            <span class="help-block">
                <strong>{{ $errors->first('control') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Seqid Field -->
<div class="form-group{{ $errors->has('seqid') ? ' has-error' : '' }}">
	{!! Form::label('seqid', 'Seqid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('seqid', null, ['class' => 'form-control']) !!}
        @if ($errors->has('seqid'))
            <span class="help-block">
                <strong>{{ $errors->first('seqid') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Value Field -->
<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
    {!! Form::label('value', 'Value', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('value', null, ['class' => 'form-control']) !!}
        @if ($errors->has('value'))
            <span class="help-block">
                <strong>{{ $errors->first('value') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('lists.index') !!}" class="btn btn-default">Mégsem</a>
</div>
