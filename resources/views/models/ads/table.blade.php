@foreach($ads as $ad)
    <div id="{!! $ad->id !!}" class="row" style="padding: 10px; border-bottom: 1px solid grey">
        <div class="media">
            <div class="media-left media-top">
                <a href="{!! route('ads.show', [$ad->id]) !!}">
                    @if (count($ad->images)==0)
                        <img class="media-object" src="http://fpoimg.com/100?text=Kép nélkül&font=calibri" width="100px">
                    @else
                        <img class="media-object" src="images/companies/10/27/{!! $ad->images->first()->filepath !!}" width="100px">
                        <span class="glyphicon glyphicon-camera badge" style="color: white; position: relative; top: -75px;">&nbsp;{!! count($ad->images) !!}</span>
                    @endif
                </a>
            </div>
            <div class="media-body">
                <h5 class="media-heading"><a href="{!! route('ads.show', [$ad->id]) !!}">{!! $ad->title !!}</a></h5>
                <div class="col-md-4">
                    {!! $ad->company->name!!}<br/>
                    {!! $ad->category->name !!}<br/>
                    {!! $ad->city->name !!}<br/>
                    {!! date_format($ad->startdate,'Y.m.d') !!} - {!! date_format($ad->enddate,'Y.m.d') !!}
                </div>
                <div class="col-md-5">
                    {!! $ad->responsible!!}<br/>
                    {!! $ad->phone !!}<br/>
                    {!! $ad->email !!}<br/>
                    {!! $ad->price !!} Ft<br/>
                </div>
                {!! Form::open(['route' => ['ads.destroy', $ad->id], 'method' => 'delete']) !!}
                <div class="btn-toolbar" role="toolbar" aria-label="...">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{!! route('ads.show', [$ad->id]) !!}" class='btn btn-warning btn-xxs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @if (null!==Auth::user() && Auth::user()->id==$ad->company->users->first()->id) 
                            <a href="{!! route('ads.edit', [$ad->id]) !!}" class='btn btn-warning btn-xxs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xxs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                        @endif 
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endforeach
{!!  $ads->links()  !!}