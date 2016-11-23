@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ url('/') }}/css/tags.css" />
<link rel="stylesheet" href="{!! asset('dropzone/dropzone.css') !!}" />
<link rel="stylesheet" href="{!! asset('lightbox/css/lightbox.css') !!}">
<style type="text/css">
.btn-delete {
width: 14px; height: 14px;
margin: 38px 0 0 66px;
position: absolute;
}
.icon-remove { background-position: -312px 0; }
.icon-white { background-image: url('http://twitter.github.com/bootstrap/assets/img/glyphicons-halflings-white.png'); }
</style>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('dropzone/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('lightbox/js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sziveslatas.js') }}"></script>
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
toggleElements(parent_id);
});
$('#price').on('change', function(e) {
var price = e.target.value;
var discountprice = document.getElementById("discountprice").value;
if (discountprice == null || discountprice == undefined || discountprice == '') {
$('#discount').val(null);
} else {
var discount = -(100-discountprice/price*100);
$('#discount').val(discount);
}
});
$('#discountprice').on('change', function(e) {
var discountprice = e.target.value;
var price = document.getElementById("price").value;
if (price == null || price == undefined || price == '') {
$('#discount').val(null);
} else {
var discount = -(100-discountprice/price*100);
$('#discount').val(discount);
}
});
$( document ).ready(function() {
toggleElements($('#parent_id').val());
});
function removeImage(id) {
//alert(id);
$.get('{{ url('/') }}/delete-image?id=' + id, function() {
alert( "A képet sikeresen eltávolítottuk" );
})
.fail(function(xhr, status, error) {
$('#image'+id).append(xhr.responseText);
});
var image = document.getElementById('image'+id);
image.parentNode.removeChild(image);
}
</script>
<script type="text/javascript">
var baseUrl = "{{ url('/') }}";
var token = "{{ Session::getToken() }}";
Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("div#dropzoneFileUpload", {
url: baseUrl+"/dropzone/uploadFiles",
addRemoveLinks: true,
maxFiles: 15,
filesizeBase: 100,
acceptedFiles: "image/*",
dictRemoveFile: "Eltávolítás",
dictCancelUpload: "Mégsem",
dictCancelUploadConfirmation: "Biztos?",
dictDefaultMessage: "Húzd ide a képeket",
dictFallbackMessage: "A böngésződ nem támogatja a drag'n'drop fájl feltöltést.",
dictFallbackText: "Kattints ide a feltöltéshez.",
dictInvalidFileType: "Nem támogatott fájltípus.",
dictRemoveFileConfirmation: null,
dictMaxFilesExceeded: "Nem tölthetsz fel több fájlt.",
params: {
_token: token
}
});
Dropzone.options.myDropzone = {
paramName: "file", // The name that will be used to transfer the file
maxFilesize: 2, // MB
accept: function(file, done) {

},
};
</script>
@endsection
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
    <div class="container">
        <div class="row">
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Hirdetés szerkesztése</div>
                <div class="panel-body">
                    @include('core-templates::common.errors')
                    {!! Form::model($ads, ['route' => ['ads.update', $ads->id], 'method' => 'patch']) !!}
                    @include('models.ads.editfields')
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('ads.index') !!}" class="nav-link btn btn-warning-outline btn-warning">Mégsem</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection