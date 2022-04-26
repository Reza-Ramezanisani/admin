<?php  session_start();
    
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/ew.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/Gh.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/consta.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/Pro.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/Ew.css">
    <script src="http://localhost/order/admin/JS/Side.js"></script>
    <script src="http://localhost/order/admin/JS/PRoQr.js"></script>
    <script src="http://localhost/order/admin/JS/del_member_msg.js"></script>
    

    <style>
        span{
            background: transparent;
            border-radius: 0;
        }
        .main{
            border: none;
        }
        h1,h5{
            color: gold;
        }
        
    </style>
</head>
<?php 

        if(isset($_SESSION['id'])){
            
      
?>
<body onload="load()">
        <div class="preloader">
            <div class="spinner"></div>
        
        </div>
        <?php include "nav.php";?>
        <?php include "nav-top.php";?>
         <?php include 'profile.php';?>

        <br>
  <div class="main mx-5 row">
        
         <div class="slide_header">
             <div>
                 <img src="./img/food-7.jpg" alt="">
                  <span class="content">
                      <h1>کارای این صفحه چیست؟</h1>
                      <h5> در اینجا میتوانید تمام محصولات را ببینید </h5>
                  </span>
                  
            </div>
             <div>
                 <img src="./img/food-5.jpg" alt="">
                  <span class="content">
                     <h1>خوش آمدید</h3>
                     <h5>به بخش گالری</h5>
                 </span>
               </div>
             <div>
                 <img src="./img/food-3.jpg" alt="">
                 <span class="content">
                     <h1>امیدوارم</h1>
                     <h5>این صفحه مورد پسند باشد</h5>
                 </span>
            </div>
             <div>
                 <img src="./img/food-6.jpg" alt="">
                 <span class="content">
                     <h1>رهبر و اعضای تیم</h1>
                     <h5>میتوانند محصولات را تغییر دهند</h5>
                 </span>
            </div>
             
        </div>
        <br>
        <br>
        <div class="my-5 bord">
            <div class="hr"></div>
            <h2 class="text-center text ">Menu</h2>
        </div>
        <div class="gallery">
            <div  class="first" >
                <img style="object-fit:contain" src="3.jpg" alt="">   
            </div>
            <div>
                <div style="padding: 12px;"><img src="img/food-6.jpg" alt=""/></div>
                <div  class="text_gallery">
                    <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                        <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                        
                       
                    
                </div>
               
            </div>
            <div>
                <div><img src="img/food-1.jpg" alt=""></div>
                <div class="text_gallery">
                    <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                        <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                        
                        <button class="btn md-btn bg-danger fs-10">Remove</button>
                        <button class="btn text-white bg-dark fs-10">Edit</button>
                </div>
            </div>
            <div>
                <div><img src="img/food-3.jpg" alt=""></div>
                <div class="text_gallery">
                    <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                    <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                    
                    <button class="btn md-btn bg-danger fs-10">Remove</button>
                    <button class="btn text-white bg-dark fs-10">Edit</button>
                </div>
            </div>
            <div>
                <div><img src="img/food-4.jpg" alt=""></div>
                <div class="text_gallery">
                <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                        <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                        
                        <button class="btn md-btn bg-danger fs-10">Remove</button>
                        <button class="btn text-white bg-dark fs-10">Edit</button>
                </div>
                   
            </div>
            <div>
                <div><img src="img/food-5.jpg" alt=""></div>
                <div class="text_gallery">
                <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                        <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                        
                        <button class="btn md-btn bg-danger fs-10">Remove</button>
                        <button class="btn text-white bg-dark fs-10">Edit</button>
                </div>
                   
            </div>
            <div>
                <div><img src="img/food-5.jpg" alt=""></div>
                <div class="text_gallery">
                <div class="line1">
                        <h4 class='text-info'>Veggies</h4>
                        <h5 class="text-success">$32.20</h5>
                        <span>Code:5247</span>
                        <span class="bg-info" style="width: 100px;border-radius: 12px;  vertical-align: middle;">In Stock</span>
                    </div>
                        <p>Lorem ipsum dolor so velit dam voluptatem commodi deleniti doloremque!</p>
                        
                        <button class="btn md-btn bg-danger fs-10">Remove</button>
                        <button class="btn text-white bg-dark fs-10">Edit</button>
            </div>
            
            
           
          
        </div>




    </div>

    



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="http://localhost/order/admin/JS/albom.js"></script>
        <?php include "linkJS.php"; ?>
       
        
</body>
<?php  
        }else{
            header("Location:login.php");
        }
?>
</html>