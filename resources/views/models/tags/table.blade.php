<table class="table table-responsive" id="tags-table">
    <thead>
        <th>Container Type</th>
        <th>Container Id</th>
        <th>Name</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($tags as $tags)
        <tr>
            <td>{!! $tags->container_type !!}</td>
            <td>{!! $tags->container_id !!}</td>
            <td>{!! $tags->name !!}</td>
            <td>
                {!! Form::open(['route' => ['tags.destroy', $tags->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tags.show', [$tags->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tags.edit', [$tags->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
