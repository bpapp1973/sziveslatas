<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Cégnév', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Üzlet név', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tax_id') ? ' has-error' : '' }}">
    {!! Form::label('tax_id', 'Adószám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tax_id', null, ['class' => 'form-control']) !!}
        @if ($errors->has('tax_id'))
            <span class="help-block">
                <strong>{{ $errors->first('tax_id') }}</strong>
            </span>
        @endif
    </div>
</div>

@if(count($categories)>0)
<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}" >
    {!! Form::label('parent_id', 'Főkategória', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('parent_id', $categories, $companies->category->parent_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('parent_id'))
            <span class="help-block">
                <strong>{{ $errors->first('parent_id') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" >
    {!! Form::label('category', 'Kategória', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('category', $subcategories, $companies->categories_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('subscriptiontype') ? ' has-error' : '' }}" >
    {!! Form::label('subscriptiontype', 'Előfizetés típusa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('subscriptiontype', $subscriptiontype, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('subscriptiontype'))
            <span class="help-block">
                <strong>{{ $errors->first('subscriptiontype') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('licence') ? ' has-error' : '' }}">
    {!! Form::label('licence', 'Érvényes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('licence', $companies->licence, ['class' => 'form-control', 'readonly']) !!}
        @if ($errors->has('licence'))
            <span class="help-block">
                <strong>{{ $errors->first('licence') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}" >
    {!! Form::label('payment', 'Fizetési mód', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('payment', $payment, null, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('payment'))
            <span class="help-block">
                <strong>{{ $errors->first('payment') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}" >
    {!! Form::label('county', 'Megye', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('county', $counties, $companies->city->counties_id, ['class' => 'form-control', 'placeholder' => 'Válassz', 'name'=>'county', 'id'=>'county']) !!}
        @if ($errors->has('county'))
            <span class="help-block">
                <strong>{{ $errors->first('county') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}" >
    {!! Form::label('city', 'Város', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('city', $cities, $companies->cities_id, ['class' => 'form-control', 'name'=>'city', 'id'=>'city']) !!}
        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
    {!! Form::label('zip', 'Irányítószám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('zip', null, ['class' => 'form-control']) !!}
        @if ($errors->has('zip'))
            <span class="help-block">
                <strong>{{ $errors->first('zip') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
    {!! Form::label('contact', 'Kapcsolattartó', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('contact', null, ['class' => 'form-control']) !!}
        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Telefonszám', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
    {!! Form::label('website', 'Weblap', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
        @if ($errors->has('website'))
            <span class="help-block">
                <strong>{{ $errors->first('website') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
    {!! Form::label('tags', 'Címkék', ['class' => 'col-md-4 control-label']) !!}

    <div  class="col-md-6">
        <div class="input-group">
            {!! Form::text('tagInput', null, ['class' => 'form-control', 'name'=>'tagInput', 'id'=>'tagInput']) !!}
            <span class="input-group-btn">
                {!! Form::button('+', ['onclick' => 'addTag(this);', 'class' => 'btn btn-default']) !!}
            </span>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('dummy', ' ', ['class' => 'col-md-4 control-label']) !!}
    <div  class="col-md-6">
        <div id="tags"">
            <?php
            if (isset($tags)) {
                foreach ($tags as $tag) {
            ?>
                <div id="tag">
                    <div id="name"><?= $tag->name ?></div>
                    <div id="delete" onclick="deleteTag(this);">x</div>
                </div>
            <?php }} ?>
        </div>
        @if ($errors->has('tags'))
            <span class="help-block">
                <strong>{{ $errors->first('tags') }}</strong>
            </span>
        @endif
    </div>
</div>
{!! Form::hidden('hiddentags', $hidden, ['id' => 'hiddentags']) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! url('/home') !!}" class="btn btn-default">Mégsem</a>
</div>
