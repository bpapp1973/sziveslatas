<script>
    /* This function is not used anymore, kept it just for not to forget */
    var token = "{{ Session::getToken() }}";
    $('#newRoomSubmit').on('click', function(e){
            $.ajax({
                url: "{{ url('/') }}/adsroom", //this is the submit URL
                type: 'POST', //or POST
                dataType: "json",
                data: {
                    _token:token,
                    ads_id:$('#ads_id').val(),
                    name:$('#modal_name').val(),
                    area:$('#modal_area').val(),
                    seats:$('#modal_seats').val(),
                    assets:$('#modal_assets').val(),
                    description:$('#modal_description').val()
                },
                error: function(xhr, status, error) {
                    var responseText;
                    $("#errors").html("");
                    try {
                        responseText = json_encode(xhr.responseText);
                        $("#errors").append("<div><b>" + errorType + " " + exception + "</b></div>");
                        $("#errors").append("<div><u>Exception</u>:<br /><br />" + responseText.ExceptionType + "</div>");
                        $("#errors").append("<div><u>StackTrace</u>:<br /><br />" + responseText.StackTrace + "</div>");
                        $("#errors").append("<div><u>Message</u>:<br /><br />" + responseText.Message + "</div>");
                    } catch (e) {
                        responseText = xhr.responseText;
                        $("#errors").html(responseText);
                    }
                },
                success: function(data){
                    document.location.reload();
                }
            });
    });

    function addRoom() {
        var rooms=JSON.parse($('#hiddenrooms').val());
        var room= {
            "ads_id":$('#ads_id').val(),
            "name":$('#modal_name').val(),
            "area":$('#modal_area').val(),
            "seats":$('#modal_seats').val(),
            "assets":$('#modal_assets').val(),
            "description":$('#modal_description').val()
        };
        rooms.push(room);
        $('#hiddenrooms').val(JSON.stringify(rooms));
    }

    function removeRoom(index) {
        var rooms=JSON.parse($('#hiddenrooms').val());
        if (confirm("Biztos vagy benne?")===true) {
            rooms.splice(index, 1);
            $('#hiddenrooms').val(JSON.stringify(rooms));
            fillRoomsTable();
        }
    }

    function fillRoomsTable() {
        var roomsArray = JSON.parse($("#hiddenrooms").val());
        var baseUrl = '{{ url('/') }}';
        $('#roomsTableBody').empty();
        for (var i = 0; i < roomsArray.length; i++) {
            $('#roomsTableBody').append('<tr>'+
                '<td>'+roomsArray[i]['ads_id']+'</td>'+
                '<td>'+roomsArray[i]['name']+'</td>'+
                '<td>'+roomsArray[i]['area']+'</td>'+
                '<td>'+roomsArray[i]['seats']+'</td>'+
                '<td>'+
                '<div class="btn-group">'+
                '<a data-toggle="modal" data-target="#editRoom" onclick="editRoom('+i+')" class="btn btn-default btn-xxs"><i class="glyphicon glyphicon-edit"></i></a>'+
                '<a onclick="removeRoom('+i+')" class="btn btn-danger btn-xxs"><i class="glyphicon glyphicon-trash"></i></a>'+
                '</div>'+
                '</td>'+
                '</tr>');
        }
    }

    function editRoom(id) {
        var roomsArray = JSON.parse($("#hiddenrooms").val());
        var room = roomsArray[id];
        $('.modal-dialog #room_id').val(id);
        $('.modal-dialog #edit_id').val(room["id"]);
        $('.modal-dialog #edit_name').val(room["name"]);
        $('.modal-dialog #edit_area').val(room["area"]);
        $('.modal-dialog #edit_seats').val(room["seats"]);
        $('.modal-dialog #edit_assets').val(room["assets"]);
        $('.modal-dialog #edit_description').val(room["description"]);
    }

    function updateRoom() {
        var rooms=JSON.parse($('#hiddenrooms').val());
        var id=$('#room_id').val();
        var room=rooms[id];
 
        room["name"]=$('#edit_name').val();
        room["area"]=$('#edit_area').val();
        room["seats"]=$('#edit_seats').val();
        room["assets"]=$('#edit_assets').val();
        room["description"]=$('#edit_description').val();
        rooms.splice(id,1,room);
        $('#hiddenrooms').val(JSON.stringify(rooms));
    }

</script>
