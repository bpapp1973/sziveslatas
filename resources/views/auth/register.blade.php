@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Regisztráció</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-warning">
                                {{ session('error') }}
                            </div>
                            @endif
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Felhasználónév</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Jelszó</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Jelszó megerősítése</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Vezetéknév</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Keresztnév</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                    @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Születésnap</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">
                                    @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Telefon</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}" >
                                <label class="col-md-4 control-label">Megye</label>
                                <div class="col-md-6">
                                    <select id="county" class="form-control" name="county">
                                        <option value="0" disabled selected>Válassz</option>
                                        @foreach($counties as $key => $value)
                                        <option value="{{ $key }}"> {{ $value }} </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}" >
                                <label class="col-md-4 control-label">Város</label>
                                <div class="col-md-6">
                                    <select id="city" class="form-control" name="city">
                                        <option value="0" disabled selected>Válassz</option>
                                        @foreach($cities as $key => $value)
                                        <option value="{{ $key }}"> {{ $value }} </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Cím</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;Regisztrálok
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('#county').on('change',function (e) {
var county = e.target.value;

//ajax
$.get('city-dropdown?county=' + county, function (data) {

$('#city').empty();
$.each(data , function (index, cityObj) {
$('#city').append('<option value="'+cityObj.id+'">'+cityObj.name+'</option>');
});
});
});
</script>
@endsection