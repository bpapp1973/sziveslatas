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


<!-- Menu Id Field -->
<div class="form-group{{ $errors->has('menu_id') ? ' has-error' : '' }}">
	{!! Form::label('menu_id', 'Menu Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('menu_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menu_id'))
            <span class="help-block">
                <strong>{{ $errors->first('menu_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Guests Field -->
<div class="form-group{{ $errors->has('guests') ? ' has-error' : '' }}">
	{!! Form::label('guests', 'Guests', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('guests', null, ['class' => 'form-control']) !!}
        @if ($errors->has('guests'))
            <span class="help-block">
                <strong>{{ $errors->first('guests') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Personnel Field -->
<div class="form-group{{ $errors->has('personnel') ? ' has-error' : '' }}">
	{!! Form::label('personnel', 'Personnel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('personnel', null, ['class' => 'form-control']) !!}
        @if ($errors->has('personnel'))
            <span class="help-block">
                <strong>{{ $errors->first('personnel') }}</strong>
            </span>
        @endif
    </div>
</div>


