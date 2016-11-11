<table class="table table-responsive" id="roles-table">
    <thead>
        <th>Name</th>
        <th>User</th>
        <th>Advertiser</th>
        <th>Operator</th>
        <th>Admin</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($roles as $roles)
        <tr>
            <td>{!! $roles->name !!}</td>
            <td>{!! $roles->user !!}</td>
            <td>{!! $roles->advertiser !!}</td>
            <td>{!! $roles->operator !!}</td>
            <td>{!! $roles->admin !!}</td>
            <td>
                {!! Form::open(['route' => ['roles.destroy', $roles->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('roles.show', [$roles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('roles.edit', [$roles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
