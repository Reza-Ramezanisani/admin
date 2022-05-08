<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script >
        $(document).ready(function () {
        //    document.body.classList.add("scroll");
      
            $('#sub').click(function () {
                let x = $('#msg').val();
                $.post("send_msg.php",{id:<?php echo $_GET['id']; ?>,msg:x},function (data,status) {
                    $("#p").html(data,status);
                });
               
            });
            function send_id() {
                $.post("PHP/msg_server.php",{id:<?php echo $_GET['id']; ?>},function (data,status) {
                    $("#e").html(data,status);
                });
               
            }
           setInterval(send_id,2);
        });
    </script>
    <style>
       
    </style>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/msg.css">
</head>
<body>
 <img class="img_page" src="3.jpg">
        <header style="">
            <h1 id='p' >
                پیغام
            </h1>
        </header>
        <main>
       <div id="e"></div>
       
            <div class="chat" style='color:white' ></div>
            
       
        
            

            
            
           
        </main>
        <footer>
        <div class="btns">

                    <button id='sub' style='width:25% ;flex:25% ;padding: 10px;border: none;cursor: pointer;margin-right: 10px;'>ارسال</button>
                    <input style='width:75% ;flex:75% ;border: none;' id='msg' type="text" name="msg" />
         </div>
        </footer>


    <script>
       window.onload= window.scrollTo({
            bottom:0,
        });
     
    </script>
</body>
</html>