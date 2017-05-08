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


<!-- Label Field -->
<div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
    {!! Form::label('label', 'Label', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('label', null, ['class' => 'form-control']) !!}
        @if ($errors->has('label'))
            <span class="help-block">
                <strong>{{ $errors->first('label') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Title Field -->
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Subtitle Field -->
<div class="form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
    {!! Form::label('subtitle', 'Subtitle', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        @if ($errors->has('subtitle'))
            <span class="help-block">
                <strong>{{ $errors->first('subtitle') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Price Field -->
<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	{!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('price', null, ['class' => 'form-control']) !!}
        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Pricedesc Field -->
<div class="form-group{{ $errors->has('pricedesc') ? ' has-error' : '' }}">
    {!! Form::label('pricedesc', 'Pricedesc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('pricedesc', null, ['class' => 'form-control']) !!}
        @if ($errors->has('pricedesc'))
            <span class="help-block">
                <strong>{{ $errors->first('pricedesc') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
	{!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('menucards.index') !!}" class="btn btn-default">Mégsem</a>
</div>
