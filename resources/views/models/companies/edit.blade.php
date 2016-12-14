@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ url('/') }}/css/future-imperfect.css" />
<link rel="stylesheet" href="{{ url('/') }}/css/tags.css" />
@endsection
@section('scripts')
<script>
$('#county').on('change', function(e) {
var county = e.target.value;
//ajax
$.get('{{ url('/') }}/city-dropdown?county=' + county, function(data) {
$('#city').empty();
$.each(data, function(index, cityObj) {
$('#city').append('<option value="' + cityObj.id + '">' + cityObj.name + '</option>');
});
});
});
$('#parent_id').on('change', function(e) {
var parent_id = e.target.value;
//ajax
$.get('{{ url('/') }}/category-dropdown?parent_id=' + parent_id, function(data) {
$('#category').empty();
$.each(data, function(index, categoryObj) {
$('#category').append('<option value="' + categoryObj.id + '">' + categoryObj.name + '</option>');
});
});
});
$('#subscriptiontype').on('change', function(e) {
var subscriptiontype = e.target.value;
var daysToAdd = 0;
switch (subscriptiontype) {
case '0':
{
daysToAdd = 30;
break;
}
case '1':
{
daysToAdd = 91;
break;
}
default:
{
daysToAdd = 365;
break;
}
}
var now = new Date();
now.setDate(now.getDate() + daysToAdd);
var y = now.getFullYear();
var m = now.getMonth() + 1;
var d = now.getDate();
var valid = y + '-' + ("0" + m).slice(-2) + '-' + ("0" + d).slice(-2);
document.getElementById("licence").value = valid;
});
function addTag(element) {
var name = $('#tagInput').val();
if (name != '') {
document.getElementById("hiddentags").value += "#" + name;
$('#tags').append('<div id="tag"><div id="name">' + name + '</div><div id="delete" onclick="deleteTag(this);">x</div></div>');
$('#tagInput').val('');
}
}
function deleteTag(element) {
var name = $(element).parent().find('#name').text();
$(element).parent().remove();
var tags = $('#hiddentags').val();
var tagArray = tags.split("#");
var pos = tagArray.indexOf(name);
tagArray.splice(pos, 1);
var newTags = tagArray.join("#");
$('#hiddentags').val(newTags);
}
</script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Hirdető szerkesztése</div>
                <div class="panel-body">
                    @include('core-templates::common.errors')
                    {!! Form::model($companies, ['route' => ['companies.update', $companies->id], 'method' => 'patch']) !!}
                    @include('models.companies.editfields')
                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection