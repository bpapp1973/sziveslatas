<section class="mbr-section article" id="content7-a" style="padding-top: 8rem; padding-bottom: 8rem;">
    <h1 class="pull-left">Kiemelések szerkesztése</h1>
    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="row" style="padding: 1em">
        @for ($i = 0; $i < 6; $i++)
                <div class="col-md-4 hvr-glow" data-toggle="modal" data-target="#ads" data-id="{!! $highlights[$i]->id !!}" data-location="{!! $highlights[$i]->location !!}" data-sequenceid="{!! $highlights[$i]->sequence_id !!}" data-adsid="{!! $highlights[$i]->ads_id !!}" >
                    @if($highlights[$i]->ad)
                        @if (count($highlights[$i]->ad->images)==0)
                            <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/600x290?text=Kép nélkül&font=calibri">
                        @else
                            <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                        @endif
                        <span class="mbr-gallery-title">
                            <strong>{!!  $highlights[$i]->ad->title !!}</strong><br/>
                            {!!  $highlights[$i]->ad->summary !!}
                        </span>
                    @else
                        <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/600x290?font=calibri">
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
<section class="mbr-section article" id="content7-a" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row" style="padding: 1em">
        @for ($i = 6; $i < 14; $i++)
            <div class="col-md-3 hvr-glow" style="padding: 0px" data-toggle="modal" data-target="#ads" data-id="{!! $highlights[$i]->id !!}" data-location="{!! $highlights[$i]->location !!}" data-sequenceid="{!! $highlights[$i]->sequence_id !!}" data-adsid="{!! $highlights[$i]->ads_id !!}" >
                @if($highlights[$i]->ad)
                    @if (count($highlights[$i]->ad->images)==0)
                        <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?text=Kép nélkül&font=calibri">
                    @else
                        <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                    @endif
                    <span class="mbr-gallery-title">
                        <strong>{!!  $highlights[$i]->ad->title !!}</strong><br/>
                        {!!  $highlights[$i]->ad->summary !!}
                    </span>
                @else
                    <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?font=calibri">
                    <span class="mbr-gallery-title">
                        <strong>Kiemelés hozzáadásához kattints ide</strong>
                    </span>
                @endif
            </div>
        @endfor
    </div>
</section>
<section class="mbr-section article" id="content7-a" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row" style="padding: 1em">
        @for ($i = 14; $i < 22; $i++)
        <div class="col-md-3  hvr-glow" style="padding: 0px" data-toggle="modal" data-target="#ads" data-id="{!! $highlights[$i]->id !!}" data-location="{!! $highlights[$i]->location !!}" data-sequenceid="{!! $highlights[$i]->sequence_id !!}" data-adsid="{!! $highlights[$i]->ads_id !!}" >
            @if($highlights[$i]->ad)
                @if (count($highlights[$i]->ad->images)==0)
                    <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?text=Kép nélkül&font=calibri">
                @else
                    <img class="bp-div-bd-image" style="width: 100%" src="{!! url('/') !!}/images/companies/{!! $highlights[$i]->ad->companies_id !!}/{!! $highlights[$i]->ads_id !!}/{!!  $highlights[$i]->ad->images->first()->filepath !!}">
                @endif
                <span class="mbr-gallery-title">
                    <strong>{!!  $highlights[$i]->ad->title !!}</strong><br/>
                    {!!  $highlights[$i]->ad->summary !!}
                </span>
            @else
                <img class="bp-div-bd-image" style="width: 100%" src="http://fpoimg.com/500?font=calibri">
                <span class="mbr-gallery-title">
                    <strong>Kiemelés hozzáadásához kattints ide</strong>
                </span>
            @endif
        </div>
        @endfor
    </div>
</section>
<div id="errors"></div>
@include('models.ads.modal_index')
