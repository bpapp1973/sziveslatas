<table class="table table-responsive" id="calendars-table">
    <thead>
        <th>Ads Id</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Isavailable</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($calendars as $calendars)
        <tr>
            <td>{!! $calendars->ads_id !!}</td>
            <td>{!! $calendars->startdate !!}</td>
            <td>{!! $calendars->enddate !!}</td>
            <td>{!! $calendars->isavailable !!}</td>
            <td>
                {!! Form::open(['route' => ['calendars.destroy', $calendars->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('calendars.show', [$calendars->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('calendars.edit', [$calendars->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
