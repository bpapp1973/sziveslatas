<table class="table table-responsive" id="users-table">
    <thead>
        <th>Felhasználónév</th>
        <th>Email</th>
        <th>Szerepkör</th>
        <th>Név</th>
        <th>Születésnap</th>
        <th>Város</th>
        <th>Cím</th>
        <th>Telefon</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->username !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->role->name !!}</td>
            <td>{!! $user->last_name.' '.$user->first_name !!}</td>
            <td>{!! $user->birthday !!}</td>
            <td>{!! $user->city->name !!}</td>
            <td>{!! $user->address !!}</td>
            <td>{!! $user->phone !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
