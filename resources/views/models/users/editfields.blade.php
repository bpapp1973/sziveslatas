<!-- Username Field -->
<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    {!! Form::label('username', 'Felhasználónév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('username', null, ['class' => 'form-control']) !!}
        @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>

@if (Auth::user()->roles_id==4)
<div class="form-group{{ $errors->has('roles_id') ? ' has-error' : '' }}" >
    {!! Form::label('roles_id', 'Szerepkör', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('roles_id', $roles, $user->roles_id, ['class'=>'form-control', 'name'=>'roles_id', 'id'=>'roles_id'] ) !!}
        @if ($errors->has('roles_id'))
            <span class="help-block">
                <strong>{{ $errors->first('roles_id') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

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


<!-- Last Name Field -->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Vezetéknév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
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
    	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Birthday Field -->
<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
	{!! Form::label('birthday', 'Születésnap', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::date('birthday', null, ['class' => 'form-control']) !!}
        @if ($errors->has('birthday'))
            <span class="help-block">
                <strong>{{ $errors->first('birthday') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}" >
    {!! Form::label('county', 'Megye', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('county', $counties, $user->city->counties_id, ['class'=>'form-control', 'name'=>'county', 'id'=>'county'] ) !!}
        @if ($errors->has('county'))
            <span class="help-block">
                <strong>{{ $errors->first('county') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cities_id') ? ' has-error' : '' }}" >
    {!! Form::label('cities_id', 'Város', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('cities_id', $cities, $user->cities_id, ['class'=>'form-control', 'name'=>'city', 'id'=>'city']) !!}
        @if ($errors->has('cities_id'))
            <span class="help-block">
                <strong>{{ $errors->first('cities_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Address Field -->
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('address', null, ['class' => 'form-control']) !!}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Phone Field -->
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Telefon', ['class' => 'col-md-4 control-label']) !!}
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
    <a href="{!! url('/home') !!}" class="btn btn-default">Mégsem</a>
</div>

