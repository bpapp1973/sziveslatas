<table class="table table-responsive" id="freetexts-table">
    <thead>
        <th>Title</th>
        <th>Text</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($freetexts as $freetext)
        <tr>
            <td>{!! $freetext->title !!}</td>
            <td>{!! $freetext->text !!}</td>
            <td>
                {!! Form::open(['route' => ['freetexts.destroy', $freetext->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('freetexts.show', [$freetext->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('freetexts.edit', [$freetext->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
