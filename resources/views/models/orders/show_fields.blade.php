<div id="page-content-wrapper">
    <div class="container">

        <div class="row">
        <!-- Ads Id Field -->
        <div class="form-group">
            {!! Form::label('ads_id', 'Hirdetés:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->ad->title !!}
            </div>
        </div>
        </div>

        <!-- Menucards Id Field -->
        @if($orders->menucards_id)
        <div class="row">
        <div class="form-group">
            {!! Form::label('menucards_id', 'Menü:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->menucard->title !!}
            </div>
        </div>
        </div>
        @endif

        @if($orders->rooms_id)
        <!-- Rooms Id Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('rooms_id', 'Helyiség:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->room->name !!}
            </div>
        </div>
        </div>
        @endif

        @if($orders->eventtype)
        <!-- Event type Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('eventtype', 'Rendezvény típusa:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->eventtype !!}
            </div>
        </div>
        </div>
        @endif

        <!-- Startdate Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('startdate', 'Kezdés:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->startdate !!}
            </div>
        </div>
        </div>

        <!-- Enddate Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('enddate', 'Vég:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->enddate !!}
            </div>
        </div>
        </div>

        <!-- Guests Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('guests', 'Vendégek száma:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->guests !!}
            </div>
        </div>
        </div>

        <!-- Personnel Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('personnel', 'Kér személyzetet:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->personnel !!}
            </div>
        </div>
        </div>

        <!-- First Name Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('first_name', 'Megrendelő:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->last_name !!} {!! $orders->first_name !!}
            </div>
        </div>
        </div>

        <!-- Email Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                <a href="mailto:{!! $orders->email !!}">{!! $orders->email !!}</a>
            </div>
        </div>
        </div>

        <!-- Phone Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('phone', 'Telefon:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                <a href="tel:{!! $orders->phone !!}">{!! $orders->phone !!}</a>
            </div>
        </div>
        </div>

        <!-- Created At Field -->
        <div class="row">
        <div class="form-group">
            {!! Form::label('created_at', 'Megrendelés időpontja:', ['class' => 'col-md-4 control-label']) !!}
            <div >
                {!! $orders->created_at !!}
            </div>
        </div>
        </div>
    </div>
</div>
