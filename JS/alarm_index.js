// $(function () {
//    $('.cancel').click(function () {
//        let id=this.id;
//        $.ajax({
//         type: "POST",
//         url: "./PHP/del_menu.php",
//         data: {id:id},
//         success: function (data) {
//             $(".msg_cancel").fadeIn(2440).html(data).fadeOut(5000);
//         },
//         error: function (e) {
            
//             $(".msg_cancel").append(`<i>Error ${e.status} : ${e.statusText}</i>`)
//             .addClass("text-danger");
//         },
//         complete:function () {
//             $.ajax({
//                 type: 'POST',
//                 url: './PHP/orders_server.php',
//                success: function(response) {
//                    setTimeout(function() {
//                        $('#tbl')
//                        .html(response);
//                     }, 100);
//                 },
//                 // location.reload(true);
//                 });
//             }
              


   
//        });       
//    });
// });

    
$(document).ready(function () {
    $('.cancel').click(function () {
      let id=this.id;
     $.ajax({
         type:"POST",
         url:"PHP/del_order.php",
         // processData: false,
         // contentType: false,
         // cache: false,
         data:{id:id},
         success:function (data) {
             $(".msg_cancel").fadeIn(200).html(data).fadeOut(1000);
             
         },
         error:function (data) {
             $(".msg_cancel").fadeIn(2440).html(data).fadeOut(5000);
             
         },
          complete:function () {
             
             $.ajax({
                 type: 'POST',
                 url: './PHP/orders_home_table.php',
                 success: function(response) {
                     setTimeout(function() {
                         $('#tbl')
                         .html(response);
                     }, 100);
                     setTimeout(function() {
                               location.reload(true);
                      
                     }, 1000);
                 },
                
             });
          }
     });
     
     
     
    
 
 });  
 $('.pardaght').click(function () {
     let id=this.id;
    $.ajax({
        type:"POST",
        url:"PHP/pardaght.php",
        // processData: false,
        // contentType: false,
        // cache: false,
        data:{id:id},
        success:function (data) {
            $(".msg_cancel").fadeIn(200).html(data).fadeOut(1000);
            
        },
        error:function (data) {
            $(".msg_cancel").fadeIn(2440).html(data).fadeOut(5000);
            
        },
         complete:function () {
            
            $.ajax({
                type: 'POST',
                url: './PHP/orders_home_table.php',
                success: function(response) {
                    setTimeout(function() {
                        $('#tbl')
                        .html(response);
                    }, 100);
                    setTimeout(function() {
                              location.reload(true);
                     
                    }, 1000);
                },
               
            });
         }
    });
    
    
    
   
 
 });  
 });      