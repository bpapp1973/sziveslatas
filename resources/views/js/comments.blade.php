<script>
    function fillCommentsTable() {
        var commentsArray = JSON.parse($("#hiddencomments").val());
//        alert("fillCommentsTable "+$("#hiddencomments").val());

        $('#commentsTableBody').empty();
        
        for (var i = 0; i < commentsArray.length; i++) {
            $('#commentsTableBody').append('<tr>'+
                '<td>'+commentsArray[i]['ads_id']+'</td>'+
                '<td>'+commentsArray[i]['users_id']+'</td>'+
                '<td>'+commentsArray[i]['created_at']+'</td>'+
                '<td>'+
                '<div class="btn-group">'+
                '<a data-toggle="modal" data-target="#editComment" onclick="editComment('+i+')" class="btn btn-default btn-xxs"><i class="glyphicon glyphicon-edit"></i></a>'+
                '<a onclick="removeComment('+i+')" class="btn btn-danger btn-xxs"><i class="glyphicon glyphicon-trash"></i></a>'+
                '</div>'+
                '</td>'+
                '</tr>');
        }
    }

    function addComment() {
        var comments=JSON.parse($('#hiddencomments').val());
        var comment= {
            "users_id":{!! Auth::user() !!}
            "comment":CKEDITOR.instances.comments_modal_comment.getData()
        };
        comments.push(comment);
        $('#hiddencomments').val(JSON.stringify(comments));
        fillCommentsTable();
    }

    function removeComment(index) {
        var comments=JSON.parse($('#hiddencomments').val());
        if (confirm("Biztos vagy benne?")===true) {
            comments.splice(index, 1);
            $('#hiddencomments').val(JSON.stringify(comments));
            fillCommentsTable();
        }
    }

    function editComment(id) {
        var commentsArray = JSON.parse($("#hiddencomments").val());
        var comment = commentsArray[id];
        $('.modal-dialog #comment_id').val(id);
        $('.modal-dialog #comment_modal_edit_id').val(comment["id"]);
        $('.modal-dialog #comment_modal_edit_label').val(comment["label"]);
        $('.modal-dialog #comment_modal_edit_title').val(comment["title"]);
        $('.modal-dialog #comment_modal_edit_subtitle').val(comment["subtitle"]);
        $('.modal-dialog #comment_modal_edit_price').val(comment["price"]);
        $('.modal-dialog #comment_modal_edit_pricedesc').val(comment["pricedesc"]);
        CKEDITOR.instances.comment_modal_edit_description.setData(comment["description"]);
    }

    function updateComment() {
        var comments=JSON.parse($('#hiddencomments').val());
        var id=$('#comment_id').val();
        var comment=comments[id];
 
        comment["label"]=$('#comment_modal_edit_label').val();
        comment["title"]=$('#comment_modal_edit_title').val();
        comment["subtitle"]=$('#comment_modal_edit_subtitle').val();
        comment["price"]=$('#comment_modal_edit_price').val();
        comment["pricedesc"]=$('#comment_modal_edit_pricedesc').val();
        comment["description"]=CKEDITOR.instances.comment_modal_edit_description.getData();
        comments.splice(id,1,comment);
        $('#hiddencomments').val(JSON.stringify(comments));
        fillCommentsTable();
    }

    function showComment(id) {
        var commentsArray = JSON.parse($("#hiddencomments").val());
        var comment = commentsArray[id];
        $('.modal-dialog #comment_id').val(id);
        $('.modal-dialog #comment_modal_show_id').val(comment["id"]);
        $('.modal-dialog #comment_modal_show_label').html(comment["label"]);
        $('.modal-dialog #comment_modal_show_title').html(comment["title"]);
        $('.modal-dialog #comment_modal_show_subtitle').html(comment["subtitle"]);
        $('.modal-dialog #comment_modal_show_price').html(comment["price"]+" Ft/fő");
        $('.modal-dialog #comment_modal_show_pricedesc').html(comment["pricedesc"]);
        $('.modal-dialog #comment_modal_show_description').html(comment["description"]);
    }

</script>
