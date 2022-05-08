<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'link.php'; ?>
    <link src="http://localhost/order/admin/CSS/msg.css">
    <style>
      @media screen  and (max-width:400px){
        .main{
         font-size:10px
        }
      }
    </style>
   
</head>
<body onload="load()">
<div class="preloader">
        <div class="spinner">
           
        </div>
    
    </div>
    <?php include "nav.php";?>
    <?php include "nav-top.php";?>
    <?php include 'profile.php';?>

    <br>
    <div class="main mx-3 row"  >
      
              <?php
              include "PHP/db.php";
              
                $sql_m1='SELECT COUNT(msg) FROM m';
                $r1=mysqli_query($conn,$sql_m1);
                $row_m1=mysqli_fetch_assoc($r1);
               

              ?>
              <!-- <li><a class="btn text-primary" href="#">Mail </a> <span>4</span></li>
              <li><a class="btn text-primary" href="#">Flaged </a> <span>10</span></li>
              <li><a class="btn text-primary" href="#">Chat </a> <span>4</span></li> -->
              
           
      <div style="overflow-y: scroll;" class="content_inbox col-md-9">
          <h4>جعبه پیام</h4>
          <p class="text-muted">شما <?php echo $row_m1['COUNT(msg)']; ?> پیغام  دارید</p>
          <hr>
         
          <hr>
          <!-- conten-msg -->
            
          <div class="inbox">
            <?php require_once "PHP/inbox_msg.php"; ?>
          </div>
          
          
          <!-- /content-msg -->
        </div>
    </div>
    
    
    
    
    
    
    
    <script src="http://localhost/order/admin/JS/ORIGINal.js"></script>
    
    <!-- <script src="http://localhost/order/admin/JS/inbox.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>