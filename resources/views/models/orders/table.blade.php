<table class="table table-responsive" id="orders-table">
    <thead>
        <th>Hirdetés</th>
        <th>Időpont</th>
        <th>Vendégek</th>
        <th>Személyzet</th>
        <th>Név</th>
        <th>Email</th>
        <th>Telefon</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($orders as $orders)
        <tr>
            <td><a href="{!! route('ads.show', [$orders->ads_id]) !!}">{!! $orders->ad->title !!}</a></td>
            <td>{!! $orders->startdate !!} - {!! $orders->enddate !!}</td>
            <td>{!! $orders->guests !!}</td>
            <td>{!! $orders->personnel !!}</td>
            <td>{!! $orders->last_name !!} {!! $orders->first_name !!}</td>
            <td>{!! $orders->email !!}</td>
            <td>{!! $orders->phone !!}</td>
            <td>
                {!! Form::open(['route' => ['orders.destroy', $orders->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orders.show', [$orders->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orders.edit', [$orders->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    
    </tbody>
</table>
