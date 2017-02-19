<section class="mbr-gallery mbr-section mbr-section-full mbr-slider-carousel" id="gallery1-4" data-filter="false" style="background-color: rgb(255, 255, 255); padding-top: 7rem; padding-bottom: 0rem;">
    <!-- Filter -->
        <h1 class="pull-left">Kiemelések szerkesztése</h1>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
        <div class="row">
            @for ($i = 0; $i < 6; $i++)
                <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0 col-md-4" data-toggle="modal" data-target="#ads" data-id="{!! $highlights[$i]->id !!}" data-location="{!! $highlights[$i]->location !!}" data-sequenceid="{!! $highlights[$i]->sequence_id !!}" data-adsid="{!! $highlights[$i]->ads_id !!}" >
                    @if($highlights[$i]->ad)
                        @if (count($highlights[$i]->ad->images)==0)
                            <img class="bp-div-bd-image" src="http://fpoimg.com/600x290?text=Kép nélkül&font=calibri">
                        @else
                            <img class="bp-div-bd-image" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                        @endif
                        <span class="mbr-gallery-title">
                            <strong>{!!  $highlights[$i]->ad->title !!}</strong><br/>
                            {!!  $highlights[$i]->ad->summary !!}
                        </span>
                    @else
                        <img class="bp-div-bd-image" src="http://fpoimg.com/600x290?font=calibri">
                        <span class="mbr-gallery-title">
                            <strong>Kiemelés hozzáadásához kattints ide</strong>
                        </span>
                    @endif
                </div>
            @endfor
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section-full" id="content7-a" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div>
        <div class="row" style="padding: 50px">
            @for ($i = 6; $i < 14; $i++)
            <div class="col-md-3" style="padding: 0px" data-toggle="modal" data-target="#ads" data-id="{!! $highlights[$i]->id !!}" data-location="{!! $highlights[$i]->location !!}" data-sequenceid="{!! $highlights[$i]->sequence_id !!}" data-adsid="{!! $highlights[$i]->ads_id !!}" >
                @if($highlights[$i]->ad)
                    @if (count($highlights[$i]->ad->images)==0)
                        <img class="bp-div-bd-image" src="http://fpoimg.com/500?text=Kép nélkül&font=calibri">
                    @else
                        <img class="bp-div-bd-image" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                    @endif
                    <span class="mbr-gallery-title">
                        <strong>{!!  $highlights[$i]->ad->title !!}</strong><br/>
                        {!!  $highlights[$i]->ad->summary !!}
                    </span>
                @else
                    <img class="bp-div-bd-image" src="http://fpoimg.com/500?font=calibri">
                    <span class="mbr-gallery-title">
                        <strong>Kiemelés hozzáadásához kattints ide</strong>
                    </span>
                @endif
            </div>
            @endfor
        </div>
    </div>
</section>
<div id="errors"></div>
@include('models.ads.modal_index')
