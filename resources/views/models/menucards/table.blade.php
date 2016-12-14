<table class="table table-responsive" id="menucards-table">
    <thead>
        <th>Ads Id</th>
        <th>Label</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Price</th>
        <th>Pricedesc</th>
        <th>Description</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($menucards as $menucards)
        <tr>
            <td>{!! $menucards->ads_id !!}</td>
            <td>{!! $menucards->label !!}</td>
            <td>{!! $menucards->title !!}</td>
            <td>{!! $menucards->subtitle !!}</td>
            <td>{!! $menucards->price !!}</td>
            <td>{!! $menucards->pricedesc !!}</td>
            <td>{!! $menucards->description !!}</td>
            <td>
                {!! Form::open(['route' => ['menucards.destroy', $menucards->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('menucards.show', [$menucards->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('menucards.edit', [$menucards->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
