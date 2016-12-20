<!-- Comment Field -->
<div class="form-group{{ $errors->has('comments_modal_edit_comment') ? ' has-error' : '' }}">
    {!! Form::label('comments_modal_edit_comment', 'Megjegyzés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('comments_modal_edit_comment', null, ['class' => 'form-control']) !!}
        <script type="text/javascript">
            CKEDITOR.replace('comments_modal_edit_comment');
        </script>
        @if ($errors->has('comments_modal_edit_comment'))
            <span class="help-block">
                <strong>{{ $errors->first('comments_modal_edit_comment') }}</strong>
            </span>
        @endif
    </div>
</div>
