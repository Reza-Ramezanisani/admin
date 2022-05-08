$(document).ready(function () {
    
    $("#btn_submit").click(function (e) {
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"PHP/setPassword_server.php",
            data:{opwd:$("#main1").val(),npwd:$("#main2").val(),cpwd:$("#main3").val()},
            success:function (data) {
                $(".err").html(data);
 
            },
            error:function (data) {
                $(".err").html(data);
            }
        });
    })
 
 });