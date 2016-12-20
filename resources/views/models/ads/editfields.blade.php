<div id="errors"></div>
@if (count($images)>0)
<section class="mbr-gallery mbr-section mbr-slider-carousel" id="gallery1-4" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                {!! Form::label('images', 'Képek', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    @for($cnt=0; $cnt<count($images); $cnt++) 
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" style="width: 32%"">
                        <div id="image{{$images[$cnt]->id}}">
                            <img src="{{ url('/').'/images/companies/'.$ads->company->id.'/'.$ads->id.'/'.$images[$cnt]->filepath }}">
                            <span onclick="removeImage('{{ $images[$cnt]->id }}')" class="glyphicon glyphicon-remove" style="position: relative; top: -120px; left: 150px; font-size: 12px; color: white"></span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

@endif

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
<div class="form-group{{ $errors->has('advertiser') ? ' has-error' : '' }}">
    {!! Form::label('advertiser', 'Hirdető', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::label('advertiser', $ads->company->title, ['class' => 'col-md-4 control-label']) !!}
        
        @if ($errors->has('advertiser'))
            <span class="help-block">
                <strong>{{ $errors->first('advertiser') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}" >
    {!! Form::label('parent_id', 'Kategória', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('parent_id', $categories, $ads->category->parent_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
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
        {!! Form::select('category', $subcategories, $ads->categories_id, ['class' => 'form-control', 'placeholder' => 'Válassz']) !!}
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
        {!! Form::select('county', $counties, $ads->city->counties_id, ['class' => 'form-control', 'placeholder' => 'Válassz', 'name'=>'county', 'id'=>'county']) !!}
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
        {!! Form::select('city', $cities, $ads->cities_id, ['class' => 'form-control', 'name'=>'city', 'id'=>'city']) !!}
        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Address Field -->
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Cím', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', $ads->address, ['class' => 'form-control']) !!}
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
    	{!! Form::text('responsible', $ads->responsible, ['class' => 'form-control']) !!}
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
    	{!! Form::text('phone', $ads->phone, ['class' => 'form-control']) !!}
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
        {!! Form::email('email', $ads->email, ['class' => 'form-control']) !!}
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
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
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
            {!! Form::text('discountprice', null, ['class' => 'form-control']) !!}
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
    <!-- vendéglátás -->
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
    
    <!-- Price Field -->
    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
        {!! Form::label('price', 'Eredeti ár', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
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
            {!! Form::text('discountprice', null, ['class' => 'form-control']) !!}
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
        {!! Form::label('visitors', 'Férőhelyek', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('visitors', null, ['class' => 'form-control']) !!}
            @if ($errors->has('visitors'))
                <span class="help-block">
                    <strong>{{ $errors->first('visitors') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- startdate Field -->
    <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
        {!! Form::label('startdate', 'Kezdődik', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::date('startdate', $ads->startdate, ['class' => 'form-control']) !!}
            @if ($errors->has('startdate'))
                <span class="help-block">
                    <strong>{{ $errors->first('startdate') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- enddate Field -->
    <div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
        {!! Form::label('enddate', 'Zárul', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::date('enddate', $ads->enddate, ['class' => 'form-control']) !!}
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
    	{!! Form::date('expireson', $ads->expireson, ['class' => 'form-control', 'readonly']) !!}
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

