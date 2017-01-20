@foreach($ads as $ad)
    <div id="{!! $ad->id !!}" class="row" style="padding: 10px; border-bottom: 1px solid grey; border-radius: 5px;">
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
                <div class="col-xs-6">
                    {!! $ad->company->name!!}<br/>
                    {!! $ad->category->name !!}<br/>
                    {!! $ad->city->name !!}<br/>
                </div>
                <div class="col-xs-4">
                    {!! $ad->responsible!!}<br/>
                    {!! $ad->phone !!}<br/>
                    {!! $ad->email !!}<br/>
                    {!! $ad->price !!} Ft<br/>
                </div>
                {!! Form::open(['route' => ['ads.destroy', $ad->id], 'method' => 'delete']) !!}
                <div class='col-xs-2 btn-group'>
                    <a href="{!! route('ads.show', [$ad->id]) !!}" class='btn btn-warning btn-xxs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if (Auth::user()) 
                        <a href="{!! route('ads.edit', [$ad->id]) !!}" class='btn btn-warning btn-xxs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xxs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif 
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endforeach
{!!  $ads->links()  !!}