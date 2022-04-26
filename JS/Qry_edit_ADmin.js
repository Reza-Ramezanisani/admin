$(document).ready(function () {
   
    $(".sub_edit").click(function(e){
        e.preventDefault();
        let form=$(this).parent()[0];
        let form_edit=new FormData(form);
        console.log(form);
        let alert_up = $("#alert_up");
        alert_up.empty();
        $.ajax({
            url:"update_admin.php",
            data:form_edit,
            type:"POST",
            processData:false,
            cache:false,
            contentType:false,
            success:function(data){
                alert_up.fadeIn(20,function(){
                   alert_up.append("<span class='tosan'></span>");
                   
                }).append("<p>"+data+"</p>").addClass("text-center").fadeOut(3000);
            },
            error:function(data){
                alert_up.fadeIn(500).append("<p>"+data+"</p>").addClass("text-center");
            }


        });

    });
});





// $.ajax({
//     type: "GET",
//     url: "PHP/table_admin.php",
//     timeout:2000,
//     success: function (data) {
//     $("#tbl").html(data);
        
//     },
//     error: function (data) {
//         $("#tbl").html(data);
          
//     }
// });