<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Felhasználónév') !!}
    <p>{!! $user->username !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Roles Id Field -->
<div class="form-group">
    {!! Form::label('roles_id', 'Szerepkör') !!}
    <p>{!! $user->role->name !!}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Név') !!}
    <p>{!! $user->last_name.' '.$user->first_name !!}</p>
</div>

<!-- Birthday Field -->
<div class="form-group">
    {!! Form::label('birthday', 'Születésnap') !!}
    <p>{!! $user->birthday !!}</p>
</div>

<!-- Cities Id Field -->
<div class="form-group">
    {!! Form::label('cities_id', 'Város') !!}
    <p>{!! $user->city->name !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Cím') !!}
    <p>{!! $user->address !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Telefon') !!}
    <p>{!! $user->phone !!}</p>
</div>
