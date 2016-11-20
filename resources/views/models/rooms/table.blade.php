<table class="table table-responsive" id="rooms-table">
    <thead>
        <th>Hirdetés</th>
        <th>Név</th>
        <th>Méret</th>
        <th>Férőhelyek</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($rooms as $rooms)
        <tr>
            <td>{!! $rooms->ads_id !!}</td>
            <td>{!! $rooms->name !!}</td>
            <td>{!! $rooms->area !!}</td>
            <td>{!! $rooms->seats !!}</td>
            <td>
                {!! Form::open(['route' => ['rooms.destroy', $rooms->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rooms.show', [$rooms->id]) !!}" class='btn btn-default btn-xxs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rooms.edit', [$rooms->id]) !!}" class='btn btn-default btn-xxs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xxs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
