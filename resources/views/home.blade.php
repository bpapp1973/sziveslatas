@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            <h1 class="pull-left">Kezdőlap</h1>
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
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Nyitott megrendelések</h4>
                    </div>
                    <div class="panel-body">
                        megrendelések
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Hirdetéseim</h4>
                    </div>
                    <div class="panel-body">
                        hirdetések
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection