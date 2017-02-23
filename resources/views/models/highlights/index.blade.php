@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ url('/') }}/css/hover.css" />
<style type="text/css">
.col-xs-offset-0_5 {
    margin-left: 5px;
    margin-bottom: 5px;
}
.bp-div-bd-image{
    background-repeat: no-repeat;
    background-size: cover;
    color:white; 
    padding: 10px; 
    height: 300px;
}
</style>
@endsection
@section('content')
        @include('models.highlights.table')
@endsection
@section('scripts')
<script type="text/javascript">

    $('#ads').on('show.bs.modal', function(e) {
        var baseUrl = '{{ url('/') }}';
        var id = $(e.relatedTarget).data('id');
        var location = $(e.relatedTarget).data('location');
        var sequenceid = $(e.relatedTarget).data('sequenceid');
        var adsid = $(e.relatedTarget).data('adsid');
        var ads =  {!!  $ads !!};
        //alert("id "+id+" - location "+location+" - sequenceid "+sequenceid+" - adsid "+adsid);

        $('#ads_list').empty();
        
        for (var i = 0; i < ads.length; i++) {
            var cls="list-group-item";
            if(ads[i]["id"]==adsid) cls+=" list-group-item-info";
            else cls+=" list-group-item-success";
            $('#ads_list').append('<button type="button" data-id="'+id+'" data-location="'+location+'" data-sequenceid="'+sequenceid+'" data-adsid="'+ads[i]["id"]+'" class="'+cls+'">'+
                '<h4 class="list-group-item-heading">'+ads[i]["title"]+'</h4>'+
                '<p class="list-group-item-text">'+ads[i]["summary"]+'</p>'+
                '</button>'
                );
        }
    });

    $(document).on("click", ".list-group-item", function () {
        var token = "{{ Session::getToken() }}";
        var ads =  {!!  $ads !!};
        var id = $(this).data('id');
        var location = $(this).data('location');
        var sequenceid = $(this).data('sequenceid');
        var adsid = $(this).data('adsid');
        //alert("id "+id+" - location "+location+" - sequenceid "+sequenceid+" - adsid "+adsid);
        var ajax = $.ajax({
            url: "{{ url('/') }}/highlights/" + id,
            type: "PATCH",
            dataType: "json",
            data: {
                    _token:token,
                    location:location,
                    sequence_id:sequenceid,
                    ads_id:adsid
                },
            error: function(xhr, status, error) {
                var responseText;
                $("#errors").html("");
                responseText = xhr.responseText;
                //$("#errors").html(responseText);
                //alert(responseText);
            },
            complete: function(data){
                recordID = -1;
                $('#ads').modal('hide');
                window.location.reload(true);
            }
        })
    });

    $("#txtSearch").on('keyup', function() {
        var search = $(this).val().toLowerCase();

        $(".list-group-item").each(function() {
            if ($(this).html().toLowerCase().indexOf(search) != -1) {
                $(this).show();
            }
            else {
                $(this).hide();  
            }
     
        });
    });

</script>

@endsection