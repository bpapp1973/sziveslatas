@extends('layouts.app')

@section('content')
    @include('models.favourites.show_fields')

    <div class="form-group">
        <a href="{!! url($_SERVER['HTTP_REFERER']) !!}" >Vissza</a>
    </div>
@endsection
