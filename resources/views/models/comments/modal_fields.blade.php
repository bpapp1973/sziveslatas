
<!-- Comment Field -->
<div class="form-group{{ $errors->has('comments_modal_comment') ? ' has-error' : '' }}">
    <div class="col-md-10">
        {!! Form::textarea('comments_modal_comment', null, ['class' => 'form-control']) !!}
        <script type="text/javascript">
            CKEDITOR.inline('comments_modal_comment');
        </script>
        @if ($errors->has('comments_modal_comment'))
            <span class="help-block">
                <strong>{{ $errors->first('comments_modal_comment') }}</strong>
            </span>
        @endif
    </div>
</div>
