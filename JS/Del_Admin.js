$(document).ready(function () {
$(".sub").click(function(e){
    e.preventDefault();
    let a=$(this);
    let id_submit=a.attr("class").split(" ")[1];
    console.log("yes");
    let x=[];
    let form_del=$("#"+id_submit+"")[0];
    console.log(a,form_del);
    let fr=new FormData(form_del);
    $("#err_top").empty();
    $.ajax({
        type:"POST",
        url:"PHP/del_admin.php",
        processData: false,
        contentType: false,
        cache: false,
        data:fr,
        success:function (data) {
            $("#err_top").fadeIn(200).append(data).fadeOut(3000);
            
        },
        error:function (data) {
            $("#tbl").before("<div></div>").addClass("alert alert-dissmisible")
            .append("<span class='alert-link alert-dismiss'>&times;</span>").append("<p>"+data.statusText+"</p>");
            
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