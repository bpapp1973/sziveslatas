<table class="table table-responsive" id="orders-table">
    <thead>
        <th>Companies Id</th>
        <th>Users Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($orders as $orders)
        <tr>
            <td>{!! $orders->companies_id !!}</td>
            <td>{!! $orders->users_id !!}</td>
            <td>{!! $orders->first_name !!}</td>
            <td>{!! $orders->last_name !!}</td>
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
