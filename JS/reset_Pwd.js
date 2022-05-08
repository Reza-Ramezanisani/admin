$(document).ready(function () {
    
   $("#btn_submit").click(function (e) {
       e.preventDefault();
       $.ajax({
           type:"POST",
           url:"PHP/verifay_email.php",
           data:{email:$("#main").val()},
           success:function (data) {
               if(data == "   s"){
                    location.href="setPassword.php";

               }
               $(".err").html(data);

           },
           error:function (data) {
               $(".err").html(data);
           }
       });
   })

});