<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $categories->id !!}</p>
</div>

<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Főkategória:') !!}
    <p>
        @if(isset($category->parent_id))
            {!! $category->parent->name !!}
        @endif        
    </p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Kategória:') !!}
    <p>{!! $categories->name !!}</p>
</div>

<!-- Isenabled Field -->
<div class="form-group">
    {!! Form::label('isenabled', 'Engedélyezve:') !!}
    <p>{!! $categories->isenabled !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Létrehozva:') !!}
    <p>{!! $categories->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Módosítva:') !!}
    <p>{!! $categories->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Törölve:') !!}
    <p>{!! $categories->deleted_at !!}</p>
</div>

