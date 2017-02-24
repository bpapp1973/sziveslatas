<table class="table table-responsive" id="companies-table">
    <thead>
        <th>Név</th>
        <th>Üzlet név</th>
        <th>Kategória</th>
        <th>Város</th>
        <th>Cím</th>
        <th>Weblap</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->name !!}</td>
            <td>{!! $company->title !!}</td>
            <td>{!! $company->category->name !!}</td>
            <td>{!! $company->city->name !!}</td>
            <td>{!! $company->address !!}</td>
            <td>{!! $company->website !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!!  $companies->links()  !!}
