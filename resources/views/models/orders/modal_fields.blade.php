<!-- Companies Id Field -->
{!! Form::hidden('companies_id', $ads->companies_id, ['id' => 'companies_id']) !!}

<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
	{!! Form::label('company', 'Hirdető', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('company', $ads->company->name, ['class' => 'form-control']) !!}
        @if ($errors->has('company'))
            <span class="help-block">
                <strong>{{ $errors->first('company') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Users Id Field -->
{!! Form::hidden('users_id', Auth::user()->id, ['id' => 'users_id']) !!}

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	{!! Form::label('username', 'Felhasználó', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('username', Auth::user()->username, ['class' => 'form-control']) !!}
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Last Name Field -->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Vezetéknév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('last_name', Auth::user()->last_name, ['class' => 'form-control']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- First Name Field -->
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    {!! Form::label('first_name', 'Keresztnév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('first_name', Auth::user()->first_name, ['class' => 'form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Phone Field -->
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Telefonszám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('phone', Auth::user()->phone, ['class' => 'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

