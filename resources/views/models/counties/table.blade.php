<table class="table table-responsive" id="counties-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($counties as $counties)
        <tr>
            <td>{!! $counties->name !!}</td>
            <td>
                {!! Form::open(['route' => ['counties.destroy', $counties->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('counties.show', [$counties->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('counties.edit', [$counties->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
