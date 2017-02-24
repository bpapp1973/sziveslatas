<table class="table table-responsive" id="categories-table">
    <thead>
        <th>Főkategória</th>
        <th>Alkategória</th>
        <th>Engedélyezve</th>
        <th colspan="3">Művelet</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr id="category">
            @if(isset($category->parent_id))
            <td>{!! $category->parent->name !!}</td>
            @else
            <td></td>
            @endif
            <td>{!! $category->name !!}</td>
            <td>{!! $category->isenabled !!}</td>
            <td>
                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user())
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Biztos vagy benne?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!!  $categories->links()  !!}
<script type="text/javascript">
/*
    $("#txtSearch").on('keyup', function() {
        var search = $(this).val().toLowerCase();

        $("#category").each(function() {
            alert($(this).html());
            if ($(this).html().toLowerCase().indexOf(search) != -1) {
                $(this).show();
            }
            else {
                $(this).hide();  
            }
     
        });
    });
*/
</script>