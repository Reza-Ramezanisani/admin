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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php include "link.php"?>
    
</head>
<?php if(isset($_SESSION['id'])){?>
<body onload='load()'>
    <!-- <div class="preloader">
        <div class="spinner">
           
        </div>
    
    </div> -->
    
<?php include "nav.php";?>
    <div class="main" style="width: 100%;margin-left: 0;" >
         <?php include "nav-top.php";?>
        <br>
       
            <h3 class="text-center bg-primary">Wellcome ,<?php echo $_SESSION['username']; ?></h3>
           
            <?php
              require "PHP/db.php"; ?>
                 
                   
              
        
        <br>

        <div class="recent_order ">
            <div class="recent_order_header">
               
                    <h4>RECENT ORDERS REQUESTED</h4>
                    <button onclick="location.href='orders.php'" class="btn">View All</button>
            
            </div>
            <br>
            <div class="recent_order_body">
                <table class="recent_order_table">
                    <tr>
                        <th>Food item</th>
                        <th>Price</th>
                        <th>Count orders</th>
                    </tr>
                    <?php
                        
                        $sql2 ="SELECT * FROM order_menu LIMIT 4";
                        $result2 = mysqli_query($conn,$sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                           
                            echo '
                        <tr>
                            <td>'.$row2['name_menu'].'</td>
                            <td>'.$row2['price'].'</td>
                            <td>'.$row2['number_order'].'</td>
                        </tr>
                            ';
                        }
                     ?>
                </table>
            </div>


        </div>
        <br>
        <div class="trending_order">
            <div class="trending_order_header">
               <h4>Trending Order</h4>
            </div>
            <br>
            <div class="trending_order_body">
                <div class="trending_order_body_img">
                    <?php
                        
                        $sql1 ="SELECT * FROM menu LIMIT 4";
                        $result1 = mysqli_query($conn,$sql1);
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            $sq ="SELECT COUNT(name_menu) FROM order_menu WHERE name_menu='{$row1['name_menu']}'";
                             $res1 = mysqli_query($conn,$sq);
                             $re=mysqli_fetch_assoc($res1);

                            echo '
                                <div style="border: 1px solid khaki;padding: 2px;">
                                    <div style="width:200px;height:200px;border:1px solid red"><img style="width:100%;hieght:100%;object-fit:cover" src="PHP/upload_menu/'.$row1['img'].'" alt=""></div>
                                    <div class="title">
                                        <div class="title_header">
                                            <h4 style="font-weight: 920;">'.$row1['name_menu'].'</h4>
                                    </div>
                                    <div class="title_body">
                                        
                                        <div class="title_order" style="color:lightblue;font-weight: bold;">Orders:'.$re['COUNT(name_menu)'].'</div>
                                        <div class="title_price" style="color:green">$'.$row1['price'].'</div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                     ?>
                   
                </div>

            </div>
          
        </div>

        <!-- modals -->
        <?php include "profile.php";?>
        <!-- /modals -->






    </div>
















    <!-- <div class="img-mix">
        <div class="poster">
            <h2>Wellcome Admin</h2>
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="http://localhost/admin/JS/wq.js"></script>
    

        

    </body>
    <?php }else {
        header('location:login.php');
    }?>
</html>