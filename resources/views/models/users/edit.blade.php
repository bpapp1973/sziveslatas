@extends('layouts.app')
@section('scripts')
<script>
$('#county').on('change',function (e) {
var county = e.target.value;
//ajax
$.get('{{ url('/') }}/city-dropdown?county=' + county, function (data) {
$('#city').empty();
$.each(data , function (index, cityObj) {
$('#city').append('<option value="'+cityObj.id+'">'+cityObj.name+'</option>');
});
});
});
function init() {
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder);
        });
    }

function geocodeAddress(geocoder) {
    var city = document.getElementById('city');
    var cityText = city.options[city.selectedIndex].text;
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': cityText+' '+address}, function(results, status) {
        if (status === 'OK') {
            $('#zipcode').val(results[0]["address_components"][4]["long_name"]);
            alert($('#zipcode').val());
        } else {
            alert('Az irányítószám lekérdezése nem sikerült: ' + status);
        }
    });
}

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHbrVzDRdwpqAJ82yROIP2L-kzpM7bMhs&callback=init">
</script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container mbr-section-full">
    <div style="padding: 3em; background-color: #ffffff">
        <div class="row">
            @if (Auth::guest()) 
                @include('auth.login')
            @else 
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Személyes adatok módosítása</div>
                <div class="panel-body">
                    @include('core-templates::common.errors')
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                    @include('models.users.editfields')
                    {!! Form::close() !!}
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
</div>
@endsection