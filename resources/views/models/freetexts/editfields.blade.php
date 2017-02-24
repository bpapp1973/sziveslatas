<!-- Title Field -->
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Text Field -->
<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
	{!! Form::label('text', 'Szöveg', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('text', null, ['class' => 'ckeditor']) !!}
        <script type="text/javascript">
            CKEDITOR.inline('text');
        </script>
        @if ($errors->has('text'))
            <span class="help-block">
                <strong>{{ $errors->first('text') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('freetexts.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>
