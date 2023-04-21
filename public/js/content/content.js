$(document).ready(function() {
     
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     //Show subject schedule
     $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/content",
            dataType: "json",
            type: "GET"
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'body', name: 'body'},
            {
                data: 'action',
                name: 'action',
                class: 'text-center',
                orderable: false,
                searchable: false
            }
        ]
    });

    

  });

  //show modal create content
  $('#createNewContent').click(function () {
    console.log('store data ini mah')
    $('#savedata').val("create-post");
    $('#id').val('');
    $('#postForm').trigger("reset");
    $('#modelHeading').html("Create New Content");
    $('#ajaxModelexa').modal('show');
});

$(document).on('click', '.edit-btn', function(){
    var content_id = $(this).data('id');
    console.log(content_id, 'id ne joh')
    $.get('content/' + content_id + '/edit', function(data) {
        console.log(data,'iki datane')
        $('#id').val(data.id);
        $('#title').val(data.title);
        $('#body').val(data.body);
        $('#ajaxModelexa').modal('show');
        $('#modelHeading').html("Edit Content");
        $('#savedata').html('Save Changes')
    });

    $('#savedata').on('click', function() {
        console.log('HAHAHAHA')
        var content_id = $('#id').val();
        var url = 'content/' + content_id + '/update';
        var data = $('#postForm').serialize();
        $.ajax({
            url: url,
            type: 'PUT',
            data: data,
            success: function(response) {
                $('#ajaxModelexa').modal('hide');
                // handle success response
            },
            error: function(xhr, status, error) {
                // handle error response
            }
        });
    });
})

//DELETE CONTENT
$(document).on('click','.delete-btn',function (){

    var content_id = $(this).data('id');
    var table = $('.data-table').DataTable()

    confirm("Are You sure want to delete content ?");

    $.ajax({
        url: "/content/" + content_id ,
        type: "DELETE",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response){   
            table.draw()
            console.log('success delete data')
        },
        error: function (err){
            console.log(err, "Error delete content")
        }
    })
})


  