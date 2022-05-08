<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="npm/node_modules/toastr/build/toastr.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/STRE.css">
<link rel="stylesheet" href="http://localhost/order/admin/CSS/style.css">
<link rel="stylesheet" href="http://localhost/order/admin/CSS/ORIginal.css">
<!-- <link rel="stylesheet" href="http://localhost/order/admin/CSS/consta.css"> -->
<link rel="stylesheet" href="http://localhost/order/admin/CSS/Pro.css">
<!-- <link rel="stylesheet" href="http://localhost/order/admin/CSS/Ew.css"> -->
<script src="http://localhost/order/admin/JS/Side.js"></script>
<script src="http://localhost/order/admin/JS/PRoQr.js"></script>
<script src="http://localhost/order/admin/JS/ALArm.js"></script>


    <style>
        span{
            background: transparent;
            border-radius: 0;
        }
        .main{
                max-width: 80%;
                margin: 0 auto;
            }
        @media screen and (max-width:1275px){
            #par{
                display: grid;
                
            }
        }
        @media screen and (max-width:600px){
            .main{
                max-width: 100%;
                margin-left:0;
                margin-right:0
            }
            .input_table{
                max-width: 100%;
            }
        }
        
        
    </style>
</head>
<?php if(isset($_SESSION['id'])){?>
<body onload="load()">
        <div class="preloader">
            <div class="spinner"></div>
        
        </div>
        <?php include "nav.php";?>
        <?php include "nav-top.php";?>
        <br>
        <div class="msg_cancel  " style="position: fixed;display:none;bottom: 20px;color: white;;right: 20px;background: #000;width: 200px;height: auto;" >
            
        </div>
  <div class="main  ">
      <div class="favorite_order p-2">
          <h5>سفارشات</h5>
          <!-- order-circel -->
          
          <h5>Search table</h5>
        <div class="input_table" style="margin-bottom: 10px;width: 50%;">
            <input type="text" dir="rtl" placeholder="لطفا وارد کنید" onkeyup="search_table(this)"/>
            <span class="span_search_table"></span>
        </div>
          <hr style="width: 50%;margin: 0 auto;">
          <br>
          <div id="tbl" style="margin-top: -100px;">
            <?php include "./PHP/orders_server.php"; ?>
          
          </div>
        
          </div>
          
       

    </div>
    <?php include "profile.php";?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php include "linkJS.php"; ?>

        
        <script>

            setInterval(()=>{
            let xhr=new XMLHttpRequest();
            xhr.open("GET","./PHP/orders_server.php");
            xhr.send();
            let elem=document.getElementById("tbl");
            xhr.onload=function () {
                if(xhr.status===200 && xhr.readyState===4){
                    elem.innerHTML=xhr.response;
                }else{
                    elem.innerHTML=xhr.status;
                }
            }
        },60000);
        function search_table(x) {
    let val_input  =  x.value.toUpperCase().trim();
    let trs = document.querySelectorAll("#tbl .table tbody tr");
    for (let i = 0; i < trs.length; i++) {
        let tds= trs[i].getElementsByTagName("td");
        let ind = 0;
        for (let o = 0; o < tds.length; o++) {
           let td= tds[o].innerText.toUpperCase();
           
            if(td.indexOf(val_input) === -1){
                ind++;
            }
            // این عدد  7 تعداد ستونهای جدول است
            if(ind===7){
                trs[i].style.display="none";
            }else{
                trs[i].style.display="";
            }
            
            
        }
        
    }
}
        </script>
        <!-- <script src="bv.js"></script> -->
</body>
<?php }else {
        header('location:login.php');
    }?>
</html>