$(document).ready(function () {
    
    $("#btn_submit").click(function (e) {
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"PHP/forgetPassword_server.php",
            data:{mail:$("#main").val()},
            success:function (data) {
                $(".err").html(data);
 
            },
            error:function (data) {
                $(".err").html(data);
            }
        });
    })
 
 });