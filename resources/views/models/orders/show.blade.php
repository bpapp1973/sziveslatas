@extends('layouts.app')

@section('content')
<div id="page-content-wrapper" style="padding-top: 15em">
    @include('models.orders.show_fields')

    <div class="form-group">
        <a href="{!! url($_SERVER['HTTP_REFERER']) !!}" >Vissza</a>
    </div>
</div>
@endsection
