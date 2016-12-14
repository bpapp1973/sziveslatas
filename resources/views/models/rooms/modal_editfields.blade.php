
<!-- Name Field -->
<div class="form-group{{ $errors->has('modal_name') ? ' has-error' : '' }}">
    {!! Form::label('modal_name', 'Név', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('modal_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('modal_name'))
            <span class="help-block">
                <strong>{{ $errors->first('modal_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Area Field -->
<div class="form-group{{ $errors->has('modal_area') ? ' has-error' : '' }}">
	{!! Form::label('modal_area', 'Méret', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('modal_area', null, ['class' => 'form-control']) !!}
        @if ($errors->has('modal_area'))
            <span class="help-block">
                <strong>{{ $errors->first('modal_area') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Seats Field -->
<div class="form-group{{ $errors->has('modal_seats') ? ' has-error' : '' }}">
	{!! Form::label('modal_seats', 'Férőhelyek', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('modal_seats', null, ['class' => 'form-control']) !!}
        @if ($errors->has('modal_seats'))
            <span class="help-block">
                <strong>{{ $errors->first('modal_seats') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Assets Field -->
<div class="form-group{{ $errors->has('modal_assets') ? ' has-error' : '' }}">
    {!! Form::label('modal_assets', 'Felszerelés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('modal_assets', null, ['class' => 'form-control']) !!}
        @if ($errors->has('modal_assets'))
            <span class="help-block">
                <strong>{{ $errors->first('modal_assets') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
<div class="form-group{{ $errors->has('modal_description') ? ' has-error' : '' }}">
	{!! Form::label('modal_description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('modal_description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('modal_description'))
            <span class="help-block">
                <strong>{{ $errors->first('modal_description') }}</strong>
            </span>
        @endif
    </div>
</div>
