<!-- Label Field -->
<div class="form-group{{ $errors->has('menucard_modal_label') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_label', 'Címke', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_label', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_label'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_label') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Title Field -->
<div class="form-group{{ $errors->has('menucard_modal_title') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_title'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_title') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Subtitle Field -->
<div class="form-group{{ $errors->has('menucard_modal_subtitle') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_subtitle', 'Alcím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_subtitle', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_subtitle'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_subtitle') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Price Field -->
<div class="form-group{{ $errors->has('menucard_modal_price') ? ' has-error' : '' }}">
	{!! Form::label('menucard_modal_price', 'Ár', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::number('menucard_modal_price', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_price'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_price') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Pricedesc Field -->
<div class="form-group{{ $errors->has('menucard_modal_pricedesc') ? ' has-error' : '' }}">
    {!! Form::label('menucard_modal_pricedesc', 'Ár leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('menucard_modal_pricedesc', null, ['class' => 'form-control']) !!}
        @if ($errors->has('menucard_modal_pricedesc'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_pricedesc') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
<div class="form-group{{ $errors->has('menucard_modal_description') ? ' has-error' : '' }}">
	{!! Form::label('menucard_modal_description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::textarea('menucard_modal_description', null, ['class' => 'form-control']) !!}
        <script type="text/javascript">
            CKEDITOR.replace('menucard_modal_description');
        </script>
        @if ($errors->has('menucard_modal_description'))
            <span class="help-block">
                <strong>{{ $errors->first('menucard_modal_description') }}</strong>
            </span>
        @endif
    </div>
</div>


