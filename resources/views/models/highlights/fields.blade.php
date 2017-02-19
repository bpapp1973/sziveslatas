<!-- Location Field -->
<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
    {!! Form::label('location', 'Hely', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('location', null, ['class' => 'form-control']) !!}
        @if ($errors->has('location'))
            <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Sequence Id Field -->
<div class="form-group{{ $errors->has('sequence_id') ? ' has-error' : '' }}">
	{!! Form::label('sequence_id', 'Sorszám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('sequence_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('sequence_id'))
            <span class="help-block">
                <strong>{{ $errors->first('sequence_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Ads Id Field -->
<div class="form-group{{ $errors->has('ads_id') ? ' has-error' : '' }}">
	{!! Form::label('ads_id', 'Hirdetés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('ads_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('ads_id'))
            <span class="help-block">
                <strong>{{ $errors->first('ads_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('highlights.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
