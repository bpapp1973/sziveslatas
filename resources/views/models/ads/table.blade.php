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
                <h5 class="media-heading"><a href="{!! route('ads.show', [$ad->id]) !!}">{!! $ad->title !!}</a></h5>
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
                    {!! $ad->price !!} Ft<br/>
                </div>
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a href="{!! route('ads.show', [$ad->id]) !!}" class='btn btn-warning btn-xxs' data-toggle="tooltip" data-placement="top" title="Megnézem"><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if (null!==Auth::user() && Auth::user()->id==$ad->company->users->first()->id) 
                        <a href="{!! route('ads.edit', [$ad->id]) !!}" class='btn btn-warning btn-xxs' data-toggle="tooltip" data-placement="top" title="Szerkesztem"><i class="glyphicon glyphicon-edit"></i></a>
                            <div style="display: none;">
                            {!! Form::hidden('title'.$ad->id, $ad->title, ['id' => 'title'.$ad->id]) !!}
                            {!! Form::hidden('description'.$ad->id, $ad->description, ['id' => 'description'.$ad->id]) !!}
                            {!! Form::hidden('highlighted'.$ad->id, abs($ad->highlighted-1), ['id' => 'highlighted'.$ad->id]) !!}
                            </div>
                            @if($ad->highlighted==0)
                                {!! Form::button('<i class="glyphicon glyphicon-unchecked"></i>', ['data-recordid' => $ad->id, 'data-toggle'=>'tooltip', 'title'=>'Kiemelem', 'class' => 'btn btn-warning btn-xxs check-btn']) !!}
                            @else
                                {!! Form::button('<i class="glyphicon glyphicon-check"></i>', ['data-recordid' => $ad->id, 'data-toggle'=>'tooltip', 'title'=>'Kiemelést megszüntetem', 'class' => 'btn btn-warning btn-xxs uncheck-btn']) !!}
                            @endif
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['data-recordid' => $ad->id, 'data-toggle'=>'tooltip', 'title'=>'Törlöm', 'class' => 'btn btn-danger btn-xxs delete-btn']) !!}
                    @endif 
                </div>
            </div>
        </div>
    </div>
@endforeach
{!!  $ads->links()  !!}



