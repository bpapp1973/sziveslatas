<table class="table table-responsive" id="lists-table">
    <thead>
        <th>Form</th>
        <th>Control</th>
        <th>Seqid</th>
        <th>Value</th>
        <th>Isenabled</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($lists as $lists)
        <tr>
            <td>{!! $lists->form !!}</td>
            <td>{!! $lists->control !!}</td>
            <td>{!! $lists->seqid !!}</td>
            <td>{!! $lists->value !!}</td>
            <td>{!! $lists->isenabled !!}</td>
            <td>
                {!! Form::open(['route' => ['lists.destroy', $lists->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lists.show', [$lists->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lists.edit', [$lists->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
