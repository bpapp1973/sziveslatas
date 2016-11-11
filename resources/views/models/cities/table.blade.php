<table class="table table-responsive" id="cities-table">
    <thead>
        <th>Counties Id</th>
        <th>Name</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($cities as $cities)
        <tr>
            <td>{!! $cities->counties_id !!}</td>
            <td>{!! $cities->name !!}</td>
            <td>
                {!! Form::open(['route' => ['cities.destroy', $cities->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cities.show', [$cities->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cities.edit', [$cities->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
