@extends('layouts.app')
@section('content')
<div id="page-content-wrapper" style="padding-top: 10em">
	<div class="container">
        <div style="padding: 3em; background-color: #ffffff">
		<h1 class="pull-left">Hirdetések</h1>
		@if (!Auth::guest() && Auth::user()->roles_id>1)
			<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ads.create') !!}">Új</a>
		@endif
		<div class="clearfix"></div>
		@include('flash::message')
		<div class="clearfix"></div>
		@include('models.ads.table')
	</div>
    </div>
	<div id="errors"></div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    var token = "{{ Session::getToken() }}";
    $('.delete-btn').on('click', function(){
        var recordID = $(this).data('recordid');
        var ajax = $.ajax({
            url: "{{ url('/') }}/ads/" + recordID ,
            type: "DELETE",
            dataType: "json",
            data: {
                    _token:token,
                    ads_id:$('#ads_id').val()
                },
                error: function(xhr, status, error) {
                    var responseText;
                    $("#errors").html("");
                    responseText = xhr.responseText;
                    $("#errors").html(responseText);
                },
                complete: function(data){
                    recordID = -1;
                    document.location.reload();
                }
        })
    });

    $('.check-btn').on('click', function(){
        var recordID = $(this).data('recordid');
        var ajax = $.ajax({
            url: "{{ url('/') }}/ads/" + recordID + "/highlight" ,
            type: "PATCH",
            dataType: "json",
            data: {
                    _token:token,
                    title:$('#title'+recordID).val(),
                    summary:$('#summary'+recordID).val(),
                    description:$('#description'+recordID).val(),
                    highlighted:$('#highlighted'+recordID).val()
                },
                error: function(xhr, status, error) {
                    var responseText;
                    $("#errors").html("");
                    responseText = xhr.responseText;
                    $("#errors").html(responseText);
                },
                complete: function(data){
                    recordID = -1;
                    location.reload();
                }
        })
    });

    $('.uncheck-btn').on('click', function(){
        var recordID = $(this).data('recordid');
        var ajax = $.ajax({
            url: "{{ url('/') }}/ads/" + recordID + '/highlight' ,
            type: "PATCH",dataType: "json",
            data: {
                    _token:token,
                    title:$('#title'+recordID).val(),
                    summary:$('#summary'+recordID).val(),
                    description:$('#description'+recordID).val(),
                    highlighted:$('#highlighted'+recordID).val()
                },
                error: function(xhr, status, error) {
                    var responseText;
                    $("#errors").html("");
                    responseText = xhr.responseText;
                    $("#errors").html(responseText);
                    alert(responseText);
                },
                complete: function(data){
                    recordID = -1;
                    location.reload();
                }
        })
    });
</script>
@endsection