@foreach($ads as $ad)
    <div id="{!! $ad->id !!}" class="row" style="padding: 10px; border-bottom: 1px solid grey">
        <div class="media">
            <div class="media-left media-top">
                <a href="{!! route('ads.show', [$ad->id]) !!}">
                    @if (count($ad->images)==0)
                        <img class="media-object" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri" width="100px">
                    @else
                        <img class="media-object" src="{!! url('/') !!}/images/companies/{!! $ad->companies_id !!}/{!! $ad->id !!}/{!! $ad->images->first()->filepath !!}" width="100px">
                        <span class="glyphicon glyphicon-camera badge" style="color: white; position: relative; top: -1.5em;">{!! count($ad->images) !!}</span>
                    @endif
                </a>
            </div>
            <div class="media-body">
                <h5 class="media-heading">
                    <a href="{!! route('ads.show', [$ad->id]) !!}">
                        {!! $ad->title !!}
                    </a>
            @if($ad->discountprice)
                <span class="label label-danger">{!! 100-$ad->discountprice/$ad->price*100 !!}% kedvezmény</span>
                &nbsp;
                <strong><strike>{!!  $ad->price !!} Ft</strike> helyett {!!  $ad->discountprice !!} Ft</strong>
            @endif
                </h5>
                <p>{!! $ad->summary !!}</p>
                <div class="col-md-5">
                    {!! $ad->company->name!!}<br/>
                    {!! $ad->category->name !!}<br/>
                    {!! $ad->city->name !!}<br/>
                    {!! date_format($ad->startdate,'Y.m.d') !!} - {!! date_format($ad->enddate,'Y.m.d') !!}
                </div>
                <div class="col-md-5">
                    {!! $ad->responsible!!}<br/>
                    {!! $ad->phone !!}<br/>
                    {!! $ad->email !!}<br/>
                    @if($ad->discountprice)
                        <strong>{!! $ad->discountprice !!} Ft</strong>
                    @elseif($ad->price)
                        {!!  $ad->price !!} Ft
                    @endif
                    <br/>
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a href="{!! route('ads.show', [$ad->id]) !!}" class='btn btn-warning' data-toggle="tooltip" data-placement="top" title="Megnézem">Bővebben</a>
                    @if (null!==Auth::user() && (Auth::user()->id==$ad->company->users->first()->id) || Auth::user()->roles_id>2) 
                        <a href="{!! route('ads.edit', [$ad->id]) !!}" class='btn btn-link btn-xxs' data-toggle="tooltip" data-placement="top" title="Szerkesztem"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['data-recordid' => $ad->id, 'data-toggle'=>'tooltip', 'title'=>'Törlöm', 'class' => 'btn btn-danger btn-xxs delete-btn']) !!}
                    @endif 
                </div>
            </div>
        </div>
    </div>
@endforeach
{!!  $ads->links()  !!}



