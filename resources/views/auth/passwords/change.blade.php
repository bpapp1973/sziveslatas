@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="../css/main.css" />
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Jelszó megváltoztatása</div>
                    <div class="panel-body">
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
                        {!! Form::model($user, ['method' => 'PATCH', 'route' => ['pwdchange.patch', $user->id]]) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            {!! Form::label('username', 'Felhasználónév', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('username', $user->username, ['class' => 'form-control', 'readonly']) !!}
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <input type="hidden" name="curr_pwd" value="{{ $user->password }}">
                        <div class="form-group{{ $errors->has('old_pwd') ? ' has-error' : '' }}">
                            {!! Form::label('old_pwd', 'Régi jelszó', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="old_pwd">
                                @if ($errors->has('old_pwd'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_pwd') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Jelszó', ['class' => 'col-md-4 control-label']) !!}
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
                            {!! Form::label('password_confirmation', 'Jelszó megerősítése', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Jelszó megváltoztatása', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection