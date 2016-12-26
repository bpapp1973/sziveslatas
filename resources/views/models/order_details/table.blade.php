<table class="table table-responsive" id="orderDetails-table">
    <thead>
        <th>Orders Id</th>
        <th>Ads Id</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Menu Id</th>
        <th>Guests</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($orderDetails as $orderDetails)
        <tr>
            <td>{!! $orderDetails->orders_id !!}</td>
            <td>{!! $orderDetails->ads_id !!}</td>
            <td>{!! $orderDetails->startdate !!}</td>
            <td>{!! $orderDetails->enddate !!}</td>
            <td>{!! $orderDetails->menu_id !!}</td>
            <td>{!! $orderDetails->guests !!}</td>
            <td>
                {!! Form::open(['route' => ['orderDetails.destroy', $orderDetails->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderDetails.show', [$orderDetails->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderDetails.edit', [$orderDetails->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
