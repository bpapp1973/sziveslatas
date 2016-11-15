<!-- Ads Id Field -->
<div class="form-group{{ $errors->has('ads_id') ? ' has-error' : '' }}">
	{!! Form::label('ads_id', 'Ads Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('ads_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('ads_id'))
            <span class="help-block">
                <strong>{{ $errors->first('ads_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Startdate Field -->
<div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
	{!! Form::label('startdate', 'Startdate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::date('startdate', null, ['class' => 'form-control']) !!}
        @if ($errors->has('startdate'))
            <span class="help-block">
                <strong>{{ $errors->first('startdate') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Enddate Field -->
<div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
	{!! Form::label('enddate', 'Enddate', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::date('enddate', null, ['class' => 'form-control']) !!}
        @if ($errors->has('enddate'))
            <span class="help-block">
                <strong>{{ $errors->first('enddate') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('calendars.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
