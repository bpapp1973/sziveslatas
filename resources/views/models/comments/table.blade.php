<table class="table table-responsive" id="comments-table">
    <thead>
        <th>Ads Id</th>
        <th>Users Id</th>
        <th>Approved</th>
        <th>Comment</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($comments as $comments)
        <tr>
            <td>{!! $comments->ads_id !!}</td>
            <td>{!! $comments->users_id !!}</td>
            <td>{!! $comments->approved !!}</td>
            <td>{!! $comments->comment !!}</td>
            <td>
                {!! Form::open(['route' => ['comments.destroy', $comments->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comments.show', [$comments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comments.edit', [$comments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
