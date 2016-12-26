<!-- Orders Id Field -->
<div class="form-group{{ $errors->has('orders_id') ? ' has-error' : '' }}">
	{!! Form::label('orders_id', 'Orders Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('orders_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('orders_id'))
            <span class="help-block">
                <strong>{{ $errors->first('orders_id') }}</strong>
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


<!-- Menu Id Field -->
<div class="form-group{{ $errors->has('menu_id') ? ' has-error' : '' }}">
	{!! Form::label('menu_id', 'Menu Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('menu_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menu_id'))
            <span class="help-block">
                <strong>{{ $errors->first('menu_id') }}</strong>
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orderDetails.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
