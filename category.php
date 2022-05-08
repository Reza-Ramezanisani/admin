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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="npm/node_modules/toastr/build/toastr.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- <script src="http://localhost/admin/JS/orders.js"></script> -->
   <?php include "link.php"; ?>
   <script src="http://localhost/order/admin/JS/CAtegory.js"></script>
   <script src="http://localhost/order/admin/JS/category_update.js"></script>
   <script src="http://localhost/order/admin/JS/del_category.js"></script>
    <style>
        span{
            background: transparent;
            border-radius: 0;
        }
        .main{
                max-width: 80%;
                margin: 0 auto;
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
            .side div.side_content.act{
                width: 130px;
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
  <div class="main  ">
    <div id="alert" style="display: none;"></div>
    <form action="#" method="post" id="form_cat">
        <input type="text" name="name" id="name">
        <input type="submit" name="submot_category" id="submot_category">
    </form>

      
          <div id="tbl_cat">

            <?php include_once "PHP/category_table.php"; ?>
          
          </div>
        
    
          
       

    </div>
    <?php include "profile.php";?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php include "linkJS.php"; ?>
        
        <script>
        //     setInterval(()=>{
        //     let xhr=new XMLHttpRequest();
        //     xhr.open("GET","./PHP/category_table.php");
        //     xhr.send();
        //     let elem=document.getElementById("tbl");
        //     xhr.onload=function () {
        //         if(xhr.status===200 && xhr.readyState===4){
        //             elem.innerHTML=xhr.response;
        //         }else{
        //             elem.innerHTML=xhr.status;
        //         }
        //     }
        // },500);
        </script>
        <!-- <script src="bv.js"></script> -->
</body>
<?php }else {
        header('location:login.php');
    }?>
</html>