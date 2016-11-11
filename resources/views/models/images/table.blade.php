<table class="table table-responsive" id="images-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Filepath</th>
        <th>Container Type</th>
        <th>Container Id</th>
        <th>Form</th>
        <th>Control Id</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($images as $images)
        <tr>
            <td>{!! $images->title !!}</td>
            <td>{!! $images->description !!}</td>
            <td>{!! $images->filepath !!}</td>
            <td>{!! $images->container_type !!}</td>
            <td>{!! $images->container_id !!}</td>
            <td>{!! $images->form !!}</td>
            <td>{!! $images->control_id !!}</td>
            <td>
                {!! Form::open(['route' => ['images.destroy', $images->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('images.show', [$images->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('images.edit', [$images->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
