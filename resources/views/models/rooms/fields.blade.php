
<!-- Name Field -->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Név', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Area Field -->
<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
	{!! Form::label('area', 'Méret', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('area', null, ['class' => 'form-control']) !!}
        @if ($errors->has('area'))
            <span class="help-block">
                <strong>{{ $errors->first('area') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Seats Field -->
<div class="form-group{{ $errors->has('seats') ? ' has-error' : '' }}">
	{!! Form::label('seats', 'Férőhelyek', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('seats', null, ['class' => 'form-control']) !!}
        @if ($errors->has('seats'))
            <span class="help-block">
                <strong>{{ $errors->first('seats') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Assets Field -->
<div class="form-group{{ $errors->has('assets') ? ' has-error' : '' }}">
    {!! Form::label('assets', 'Felszerelés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('assets', null, ['class' => 'form-control']) !!}
        @if ($errors->has('assets'))
            <span class="help-block">
                <strong>{{ $errors->first('assets') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
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
