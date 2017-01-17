
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('', 'Fotók hozzáadása', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="dropzone" id="dropzoneFileUpload">
            <div class="dz-message" data-dz-message>
                <span class="col-md-12">Húzd ide a képeket</span>
                <span class="col-md-12">A képfeltöltést a képek idehúzásával is elvégezheted</span>
            </div>
        </div>
    </div>
</div>


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


<!-- Companies Id Field -->
<div class="form-group{{ $errors->has('companies_id') ? ' has-error' : '' }}">
	{!! Form::label('companies_id', 'Hirdető', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::label('companies_id', $user->companies->first()->title, ['class' => 'col-md-4 control-label']) !!}
        
    	{!! Form::hidden('companies_id', $user->companies->first()->id, ['class' => 'form-control', 'readonly']) !!}
        @if ($errors->has('companies_id'))
            <span class="help-block">
                <strong>{{ $errors->first('companies_id') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}" >
    {!! Form::label('parent_id', 'Kategória', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('parent_id', $categories, $user->companies->first()->category->parent_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('parent_id'))
            <span class="help-block">
                <strong>{{ $errors->first('parent_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" >
    {!! Form::label('category', 'Alkategória', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('category', $subcategories, $user->companies->first()->categories_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
        @if ($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}" >
    {!! Form::label('county', 'Megye', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('county', $counties, $user->companies->first()->city->counties_id, ['class' => 'form-control', 'placeholder' => 'Válassz', 'name'=>'county', 'id'=>'county']) !!}
        @if ($errors->has('county'))
            <span class="help-block">
                <strong>{{ $errors->first('county') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cities_id') ? ' has-error' : '' }}" >
    {!! Form::label('cities_id', 'Város', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('cities_id', $cities, $user->companies->first()->cities_id, ['class' => 'form-control', 'name'=>'city', 'id'=>'city']) !!}
        @if ($errors->has('cities_id'))
            <span class="help-block">
                <strong>{{ $errors->first('cities_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Address Field -->
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', $user->companies->first()->address, ['class' => 'form-control']) !!}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Responsible Field -->
<div class="form-group{{ $errors->has('responsible') ? ' has-error' : '' }}">
    {!! Form::label('responsible', 'Kapcsolat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('responsible', $user->last_name.' '.$user->first_name, ['class' => 'form-control']) !!}
        @if ($errors->has('responsible'))
            <span class="help-block">
                <strong>{{ $errors->first('responsible') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Phone Field -->
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Telefon', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::text('phone', $user->phone, ['class' => 'form-control']) !!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div id="accomodation">
    <!-- szállás -->
    <!-- Price Field -->
    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
        {!! Form::label('price', 'Eredeti ár', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('price', null, ['class' => 'form-control']) !!}
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Price Field -->
    <div class="form-group{{ $errors->has('discountprice') ? ' has-error' : '' }}">
        {!! Form::label('discountprice', 'Kedvezményes ár', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('discountprice', null, ['class' => 'form-control']) !!}
            @if ($errors->has('discountprice'))
                <span class="help-block">
                    <strong>{{ $errors->first('discountprice') }}</strong>
                </span>
            @endif
        </div>
    </div>
     
    <!-- Price Field -->
    <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
        {!! Form::label('discount', 'Kedvezmény', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('discount', null, ['class' => 'form-control', 'readonly']) !!}
            @if ($errors->has('discount'))
                <span class="help-block">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
            @endif
        </div>
    </div>

</div>

<div id="catering">
    <!-- Button trigger modal -->
    <div class="form-group{">
        {!! Form::label('', '', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <button type="button" onclick="fillRoomsTable()" class="btn btn-primary" data-toggle="modal" data-target="#rooms">
              Helyiségek
            </button>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="form-group{">
        {!! Form::label('', '', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <button type="button" onclick="fillMenucardsTable()" class="btn btn-primary" data-toggle="modal" data-target="#menucards">
              Menü ajánlatok
            </button>
        </div>
    </div>

</div>

<div id="eventlocation">
    <!-- rendezvényhelyszín -->
    <!-- Button trigger modal -->
    <div class="form-group{">
        {!! Form::label('', '', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <button type="button" onclick="fillRoomsTable()" class="btn btn-primary" data-toggle="modal" data-target="#rooms">
              Helyiségek
            </button>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="form-group{">
        {!! Form::label('', '', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <button type="button" onclick="fillMenucardsTable()" class="btn btn-primary" data-toggle="modal" data-target="#menucards">
              Menü ajánlatok
            </button>
        </div>
    </div>
</div>

<div id="program">
    <!-- program -->
    <!-- Price Field -->
    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
        {!! Form::label('price', 'Eredeti ár', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('price', null, ['class' => 'form-control']) !!}
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Discount Price Field -->
    <div class="form-group{{ $errors->has('discountprice') ? ' has-error' : '' }}">
        {!! Form::label('discountprice', 'Kedvezményes ár', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('discountprice', null, ['class' => 'form-control']) !!}
            @if ($errors->has('discountprice'))
                <span class="help-block">
                    <strong>{{ $errors->first('discountprice') }}</strong>
                </span>
            @endif
        </div>
    </div>
     
    <!-- Discount Field -->
    <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
        {!! Form::label('discount', 'Kedvezmény', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('discount', null, ['class' => 'form-control', 'readonly']) !!}
            @if ($errors->has('discount'))
                <span class="help-block">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Visitors Field -->
    <div class="form-group{{ $errors->has('visitors') ? ' has-error' : '' }}">
        {!! Form::label('visitors', 'Látogatók száma', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('visitors', null, ['class' => 'form-control']) !!}
            @if ($errors->has('visitors'))
                <span class="help-block">
                    <strong>{{ $errors->first('visitors') }}</strong>
                </span>
            @endif
        </div>
    </div>


   <!-- Startdate Field -->
    <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
        {!! Form::label('startdate', 'Kezdődik', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::date('startdate', date('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
            @if ($errors->has('startdate'))
                <span class="help-block">
                    <strong>{{ $errors->first('startdate') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <!-- Enddate Field -->
    <div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
        {!! Form::label('enddate', 'Zárul', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::date('enddate', null, ['class' => 'form-control']) !!}
            @if ($errors->has('enddate'))
                <span class="help-block">
                    <strong>{{ $errors->first('enddate') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<!-- Expireson Field -->
<div class="form-group{{ $errors->has('expireson') ? ' has-error' : '' }}">
	{!! Form::label('expireson', 'Érvényes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    	{!! Form::date('expireson', $user->companies->first()->licence, ['class' => 'form-control', 'readonly']) !!}
        @if ($errors->has('expireson'))
            <span class="help-block">
                <strong>{{ $errors->first('expireson') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Description Field -->
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Leírás', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'ckeditor']) !!}
        <script type="text/javascript">  
            CKEDITOR.replace( 'description');  
        </script>  
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
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

{!! Form::hidden('hiddentags', null, ['id' => 'hiddentags']) !!}
{!! Form::hidden('hiddenrooms', json_encode($rooms), ['id' => 'hiddenrooms']) !!}
{!! Form::hidden('hiddenmenucards', json_encode($menucards), ['id' => 'hiddenmenucards']) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ads.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
</div>

@include('models.rooms.modal_index')
@include('models.rooms.modal_create')
@include('models.rooms.modal_edit')
@include('js.rooms')

@include('models.menucards.modal_index')
@include('models.menucards.modal_create')
@include('models.menucards.modal_edit')
@include('js.menucards')

