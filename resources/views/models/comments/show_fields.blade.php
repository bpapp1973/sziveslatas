<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comments->id !!}</p>
</div>

<!-- Ads Id Field -->
<div class="form-group">
    {!! Form::label('ads_id', 'Ads Id:') !!}
    <p>{!! $comments->ads_id !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{!! $comments->users_id !!}</p>
</div>

<!-- Approved Field -->
<div class="form-group">
    {!! Form::label('approved', 'Approved:') !!}
    <p>{!! $comments->approved !!}</p>
</div>

<!-- Comment Field -->
<div class="form-group">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{!! $comments->comment !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comments->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comments->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $comments->deleted_at !!}</p>
</div>

