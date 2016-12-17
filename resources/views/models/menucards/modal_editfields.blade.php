<!-- Label Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_label') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_edit_label', 'Címke', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_edit_label', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_edit_label'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_label') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Title Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_title') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_edit_title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_edit_title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_edit_title'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_title') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Subtitle Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_subtitle') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_edit_subtitle', 'Alcím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_edit_subtitle', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_edit_subtitle'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_subtitle') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Price Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_price') ? ' has-error' : '' }}">
	{!! Form::label('menucard_modal_edit_price', 'Ár', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('menucard_modal_edit_price', null, ['class' => 'form-control']) !!}
        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_price') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Pricedesc Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_pricedesc') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_edit_pricedesc', 'Ár leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_edit_pricedesc', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_edit_pricedesc'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_pricedesc') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
<div class="form-group{{ $errors->has('menucard_modal_edit_description') ? ' has-error' : '' }}">
	{!! Form::label('menucard_modal_edit_description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('menucard_modal_edit_description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_edit_description'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_edit_description') }}</strong>
            </span>
        @endif
    </div>
</div>

