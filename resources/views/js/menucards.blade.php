<script>
    function fillMenucardsTable() {
        var menucardsArray = JSON.parse($("#hiddenmenucards").val());
//        alert("fillMenucardsTable "+$("#hiddenmenucards").val());

        $('#menucardsTableBody').empty();
        
        for (var i = 0; i < menucardsArray.length; i++) {
            $('#menucardsTableBody').append('<tr>'+
                '<td>'+menucardsArray[i]['label']+'</td>'+
                '<td>'+menucardsArray[i]['title']+'</td>'+
                '<td>'+menucardsArray[i]['subtitle']+'</td>'+
                '<td>'+menucardsArray[i]['price']+'</td>'+
                '<td>'+menucardsArray[i]['pricedesc']+'</td>'+
                '<td>'+
                '<div class="btn-group">'+
                '<a data-toggle="modal" data-target="#editMenucard" onclick="editMenucard('+i+')" class="btn btn-default btn-xxs"><i class="glyphicon glyphicon-edit"></i></a>'+
                '<a onclick="removeMenucard('+i+')" class="btn btn-danger btn-xxs"><i class="glyphicon glyphicon-trash"></i></a>'+
                '</div>'+
                '</td>'+
                '</tr>');
        }
        
    }

    function addMenucard() {
        var menucards=JSON.parse($('#hiddenmenucards').val());
        var menucard= {
            "ads_id":$('#ads_id').val(),
            "label":$('#menucard_modal_label').val(),
            "title":$('#menucard_modal_title').val(),
            "subtitle":$('#menucard_modal_subtitle').val(),
            "price":$('#menucard_modal_price').val(),
            "pricedesc":$('#menucard_modal_pricedesc').val(),
            "description":$('#menucard_modal_description').val()
        };
        menucards.push(menucard);
        $('#hiddenmenucards').val(JSON.stringify(menucards));
        fillMenucardsTable();
    }

    function removeMenucard(index) {
        var menucards=JSON.parse($('#hiddenmenucards').val());
        if (confirm("Biztos vagy benne?")===true) {
            menucards.splice(index, 1);
            $('#hiddenmenucards').val(JSON.stringify(menucards));
            fillMenucardsTable();
        }
    }

    function editMenucard(id) {
        var menucardsArray = JSON.parse($("#hiddenmenucards").val());
        var menucard = menucardsArray[id];
        $('.modal-dialog #menucard_id').val(id);
        $('.modal-dialog #menucard_modal_edit_id').val(menucard["id"]);
        $('.modal-dialog #menucard_modal_edit_label').val(menucard["label"]);
        $('.modal-dialog #menucard_modal_edit_title').val(menucard["title"]);
        $('.modal-dialog #menucard_modal_edit_subtitle').val(menucard["subtitle"]);
        $('.modal-dialog #menucard_modal_edit_price').val(menucard["price"]);
        $('.modal-dialog #menucard_modal_edit_pricedesc').val(menucard["pricedesc"]);
        $('.modal-dialog #menucard_modal_edit_description').val(menucard["description"]);
    }

    function updateMenucard() {
        var menucards=JSON.parse($('#hiddenmenucards').val());
        var id=$('#menucard_id').val();
        var menucard=menucards[id];
 
        menucard["label"]=$('#menucard_modal_edit_label').val();
        menucard["title"]=$('#menucard_modal_edit_title').val();
        menucard["subtitle"]=$('#menucard_modal_edit_subtitle').val();
        menucard["price"]=$('#menucard_modal_edit_price').val();
        menucard["pricedesc"]=$('#menucard_modal_edit_pricedesc').val();
        menucard["description"]=$('#menucard_modal_edit_description').val();
        alert(JSON.stringify(menucard));
        menucards.splice(id,1,menucard);
        $('#hiddenmenucards').val(JSON.stringify(menucards));
        fillMenucardsTable();
    }



</script>
