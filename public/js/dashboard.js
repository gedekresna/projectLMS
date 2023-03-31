// $(window).on("load",function(){
//     console.log("masuk")

//      //Show subject schedule
//      $('.data-table').DataTable({
//         processing: true,
//         serverside: true,
//         responsive: true,
//         ajax: {
//             url: "haha",
//             dataType: "json",
//             type: "GET"
//         },
//         columns: [
//             {
//                 data: "DT_RowIndex",
//                 name: "DT_RowIndex",
//                 class: "text-center",
//                 orderable: false,
//                 searchable: true
//             },
//             {data: "subject",name: "subject"},
//             {data: "date",name: "date"},
//             {
//                 data: "action",
//                 name: "action",
//                 class: "text-center",
//                 orderable: false,
//                 searchable: false
//             }
//         ]
//     });

// });

$(document).ready(function() {
    console.log("masuk")

     //Show subject schedule
     $('.data-table').DataTable({
        processing: true,
        serverside: true,
        responsive: true,
        ajax: {
            url: "haha",
            dataType: "json",
            type: "GET"
        },
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                class: "text-center",
                orderable: false,
                searchable: true
            },
            {data: "subject",name: "subject"},
            {data: "date",name: "date"},
            {
                data: "action",
                name: "action",
                class: "text-center",
                orderable: false,
                searchable: false
            }
        ]
    });
  });
  