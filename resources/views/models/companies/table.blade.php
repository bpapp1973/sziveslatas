<table class="table table-responsive" id="companies-table">
    <thead>
        <th>Név</th>
        <th>Üzlet név</th>
        <th>Email</th>
        <th>Adószám</th>
        <th>Kategória</th>
        <th>Város</th>
        <th>Cím</th>
        <th>Kapcsolattartó</th>
        <th>Telefon</th>
        <th>Weblap</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($companies as $companies)
        <tr>
            <td>{!! $companies->name !!}</td>
            <td>{!! $companies->title !!}</td>
            <td>{!! $companies->email !!}</td>
            <td>{!! $companies->tax_id !!}</td>
            <td>{!! $companies->category->name !!}</td>
            <td>{!! $companies->city->name !!}</td>
            <td>{!! $companies->address !!}</td>
            <td>{!! $companies->contact !!}</td>
            <td>{!! $companies->phone !!}</td>
            <td>{!! $companies->website !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $companies->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$companies->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$companies->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
