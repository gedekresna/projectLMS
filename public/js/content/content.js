$(document).ready(function() {
    console.log("hahayukk")
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
    console.log("masuk sini")
  });
  