<!-- Companies Id Field -->
{!! Form::hidden('companies_id', $ads->companies_id, ['id' => 'companies_id']) !!}
<!--
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
-->

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

<!-- Ads Id Field -->
{!! Form::hidden('ads_id', $ads->id, ['id' => 'ads_id']) !!}
<div class="form-group{{ $errors->has('ads_title') ? ' has-error' : '' }}">
    {!! Form::label('ads_title', 'Hirdetés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ads_title', $ads->title, ['class' => 'form-control']) !!}
        @if ($errors->has('ads_title'))
            <span class="help-block">
                <strong>{{ $errors->first('ads_title') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- daterange Field -->
<div class="form-group{{ $errors->has('daterange') ? ' has-error' : '' }}">
    {!! Form::label('daterange', 'Időpont', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daterange', date("Y-m-d H:i")." - ".date("Y-m-d H:i"), ['class' => 'input-sm form-control']) !!}
        @if ($errors->has('daterange'))
            <span class="help-block">
                <strong>{{ $errors->first('daterange') }}</strong>
            </span>
        @endif
    </div>
</div>

@if($ads->category->parent_id==3)

@if(count($ads->menucards)>0)
<!-- Menucards Id Field -->
<div class="form-group{{ $errors->has('menucards_id') ? ' has-error' : '' }}">
    {!! Form::label('menucards_id', 'Menü', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('menucards_id', $menucardsArray, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('menucards_id'))
            <span class="help-block">
                <strong>{{ $errors->first('menucards_id') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

<!-- Eventtype Field -->
<div class="form-group{{ $errors->has('eventtype') ? ' has-error' : '' }}">
    {!! Form::label('eventtype', 'Rendezvény típusa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('eventtype', null, ['class' => 'form-control']) !!}
        @if ($errors->has('eventtype'))
            <span class="help-block">
                <strong>{{ $errors->first('eventtype') }}</strong>
            </span>
        @endif
    </div>
</div>


@if(count($ads->rooms)>0)
<!-- Rooms Id Field -->
<div class="form-group{{ $errors->has('rooms_id') ? ' has-error' : '' }}">
    {!! Form::label('rooms_id', 'Helyiség', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('rooms_id', $roomsArray, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('rooms_id'))
            <span class="help-block">
                <strong>{{ $errors->first('rooms_id') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

<!-- Personnel Field -->
<div class="form-group{{ $errors->has('personnel') ? ' has-error' : '' }}">
    {!! Form::label('personnel', 'Személyzet', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('personnel', ['1' => 'Igen', '0' => 'Nem'], null, ['class' => 'form-control', 'placeholder' => 'Kérsz személyzetet?']) !!}
        @if ($errors->has('personnel'))
            <span class="help-block">
                <strong>{{ $errors->first('personnel') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

<!-- Guests Field -->
<div class="form-group{{ $errors->has('guests') ? ' has-error' : '' }}">
    {!! Form::label('guests', 'Vendégek száma', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('guests', null, ['class' => 'form-control']) !!}
        @if ($errors->has('guests'))
            <span class="help-block">
                <strong>{{ $errors->first('guests') }}</strong>
            </span>
        @endif
    </div>
</div>


