<!-- Parent Id Field -->
<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
	{!! Form::label('parent_id', 'Parent Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('parent_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('parent_id'))
            <span class="help-block">
                <strong>{{ $errors->first('parent_id') }}</strong>
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
    <a href="{!! route('categories.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
