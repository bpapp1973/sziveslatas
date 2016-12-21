{!! Form::hidden('edit_id', null, ['id' => 'edit_id']) !!}

<!-- Name Field -->
<div class="form-group{{ $errors->has('edit_name') ? ' has-error' : '' }}">
    {!! Form::label('edit_name', 'Név', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('edit_name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_name'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_name') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Area Field -->
<div class="form-group{{ $errors->has('edit_area') ? ' has-error' : '' }}">
	{!! Form::label('edit_area', 'Méret', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('edit_area', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_area'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_area') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Seats Field -->
<div class="form-group{{ $errors->has('edit_seats') ? ' has-error' : '' }}">
	{!! Form::label('edit_seats', 'Férőhelyek', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('edit_seats', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_seats'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_seats') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Assets Field -->
<div class="form-group{{ $errors->has('edit_assets') ? ' has-error' : '' }}">
    {!! Form::label('edit_assets', 'Felszerelés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('edit_assets', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_assets'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_assets') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Seats Field -->
<div class="form-group{{ $errors->has('edit_price') ? ' has-error' : '' }}">
    {!! Form::label('edit_price', 'Ár', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('edit_price', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_price'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_price') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
<div class="form-group{{ $errors->has('edit_description') ? ' has-error' : '' }}">
	{!! Form::label('edit_description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('edit_description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('edit_description'))
            <span class="help-block">
                <strong>{{ $errors->first('edit_description') }}</strong>
            </span>
        @endif
    </div>
</div>
