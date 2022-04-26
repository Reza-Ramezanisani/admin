$(document).ready(function () {
    
    $("#submit_admin").click(function(event) {
        event.preventDefault();
        var form = $('#form')[0];
        var data = new FormData(form);
        $("#text").empty();
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "PHP/add_admin.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                $("#text").append("<i>"+data+"</i>").addClass("text-danger fs-4 text-center");
            },
            error: function (e) {
                
                $("#text").append(`<i>Error ${e.status} : ${e.statusText}</i>`)
                .addClass("text-danger");
            },
            complete:function () {
               
               $.ajax({
                   type: 'POST',
                   url: 'PHP/leader_table_admin.php',
                   success: function(response) {
                       setTimeout(function() {
                           $('#tbl')
                           .html(response);
                       }, 1000);
                   },
                  
               });
            }
        });
    }); 
   
    


        
        




});
// setInterval(() => {
//     let xhr=new XMLHttpRequest();
//     xhr.open("GET","PHP/table_admin.php");
//     xhr.onload=()=>{
//         if(xhr.status===200 && xhr.readyState===4){
            
//             document.getElementById("tbl").innerHTML=xhr.response;
//         }
//     }
//     xhr.send();
// },300);
















