<!-- Companies Id Field -->
<div class="form-group{{ $errors->has('companies_id') ? ' has-error' : '' }}">
	{!! Form::label('companies_id', 'Companies Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('companies_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('companies_id'))
            <span class="help-block">
                <strong>{{ $errors->first('companies_id') }}</strong>
            </span>
        @endif
    </div>
</div>


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


<!-- Menucards Id Field -->
<div class="form-group{{ $errors->has('menucards_id') ? ' has-error' : '' }}">
	{!! Form::label('menucards_id', 'Menucards Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('menucards_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucards_id'))
            <span class="help-block">
                <strong>{{ $errors->first('menucards_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Rooms Id Field -->
<div class="form-group{{ $errors->has('rooms_id') ? ' has-error' : '' }}">
	{!! Form::label('rooms_id', 'Rooms Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('rooms_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('rooms_id'))
            <span class="help-block">
                <strong>{{ $errors->first('rooms_id') }}</strong>
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


<!-- Users Id Field -->
<div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
	{!! Form::label('users_id', 'Users Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('users_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('users_id'))
            <span class="help-block">
                <strong>{{ $errors->first('users_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- First Name Field -->
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Last Name Field -->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Phone Field -->
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orders.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
