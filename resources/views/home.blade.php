@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
    <div style="padding: 3em; background-color: #ffffff">
        <div class="row">
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
        @if (Auth::guest())
            {!! redirect(route('welcome')) !!}
        @else
            @if(Auth::user()->roles_id == 1)
                Felhasználó->átirányítás a keresőhöz
            @elseif (Auth::user()->roles_id == 2)
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Nyitott megrendelések</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-responsive" id="orders-table">
                                    <thead>
                                        <th>Hirdetés</th>
                                        <th>Megrendelő</th>
                                    </thead>
                                    <tbody>
                                    @foreach($notconfirmedevents as $orders)
                                        <tr>
                                        @if(array_key_exists('ad',$orders))
                                            <td><a href="{!! route('orders.show', [$orders->id]) !!}">{!! $orders->ad->title !!}</a></td>
                                            <td>{!! $orders->last_name !!} {!! $orders->first_name !!}</td>
                                        @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!!  $notconfirmedevents->links()  !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Hirdetéseim</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-responsive" id="orders-table">
                                    <tbody>
                                    @foreach($ads as $ad)
                                        <tr>
                                            <td><a href="{!! route('ads.show', [$ad->id]) !!}">{!! $ad->title !!}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!!  $ads->links()  !!}
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Új hirdetések</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-responsive" id="orders-table">
                                    <tbody>
                                    @foreach($ads as $ad)
                                        <tr>
                                            <td><a href="{!! route('ads.show', [$ad->id]) !!}">{!! $ad->title !!}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!!  $ads->links()  !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
    </div>
</div>
@endsection