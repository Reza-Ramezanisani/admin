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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/STRE.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/ORIginal.css">
    <!-- <link rel="stylesheet" href="http://localhost/order/admin/CSS/consta.css"> -->
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/Pro.css">
    <!-- <link rel="stylesheet" href="http://localhost/order/admin/CSS/Ew.css"> -->
    <script src="http://localhost/order/admin/JS/Side.js"></script>
    <script src="http://localhost/order/admin/JS/PRoQr.js"></script>

    <style>
        @media screen and (max-width:800px){
            
            .recent_order .recent_order_header{
                display: grid;
                
                overflow: auto;
                width: 100%;margin: 0 auto;
                
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
            <div class="spinner">
                
                </div>
                
            </div>
            
            <?php include "nav.php";?>
            <?php include "nav-top.php";?>
             <?php include 'profile.php';?>
            <div class="main" style="width: 100%;margin-left: 0;" >
               
                <br>
                
                <h3 class="text-center bg-primary"><?php echo $_SESSION['username']; ?> خوش آمدی </h3>
                
                <?php
              require "PHP/db.php"; ?>
                 
                   
                 
                 
               
                
                 
                 <div class="recent_order " style='overflow: auto;'>
            <div class="recent_order_header" dir='rtl' >
                
                <h4>سفارشات تازه </h4>
                <button onclick="location.href='orders.php'"  class="btn">ببین همه رو</button>
            
            </div>
         
            <div class="recent_order_body" >
                <div id="tbl" >
                    <?PHP require_once "PHP/order_home_table.php"; ?>
                </div>
            </div>
            

        </div>
        <br>
        <div class="trending_order" style='overflow: auto;font-size: 3vw;'>
        <div class="recent_order_header" dir='rtl' >
                <h4 >محصولات تازه ثبت شده</h4>
                <button onclick="location.href='menu_list.php'"  class="btn fs-6">ببین همه رو</button>
                <!-- <button onclick="location.href='menu_list.php'"  class="btn">ببین همه رو</button> -->
            </div>
            <br>
            <div class="trending_order_body">
                <div class="trending_order_body_img">
                <hr>
<div class="table-responsive-md ">
   
    <table  class="table p-0 fs-4 table-info text-center">

        <?php
         require "php/db.php";
         $sql='SELECT * FROM menu INNER JOIN category ON menu.category = category.id LIMIT 4; ';
         $res=mysqli_query($conn,$sql);
         if(mysqli_num_rows($res)){
             echo "
         <tr>
             <th style='width:500px'>عکس</th>
             <th>نام محصول</th>
             <th>دسته بندی</th>
             <th>وضعیت موجود در انبار</th>
             <th>تعداد محصول </th>
             <th>قیمت</th>
             <th>تخفیف</th>
             
             
         </tr>
             ";

            while($row=mysqli_fetch_assoc($res)){
                $discount=htmlspecialchars(stripslashes($row['discount_num']));
                $price=htmlspecialchars(stripslashes($row['price']));
                $PRIX=$price * ($discount / 100);
                $num= htmlspecialchars(stripslashes($row['number_menu'])); 
                ?>
                <tr>
                    <td style="background-image: url('./PHP/upload_menu/<?php echo $row['img'];?>');background-repeat: no-repeat;background-size: 50%;background-position: 50% 50%;padding: 10px;">  </td>
                    <td><?php echo htmlspecialchars(stripslashes($row['name_menu'])); ?></td>
                    <td><?php echo htmlspecialchars(stripslashes($row['name_cat'])); ?></td>
                    <td><?php if($row['status_menu']==="on"){
                        echo "موجود است";
                    }else{
                        echo "موجود نیست";
                        $num=0;
                    }  
                    ?></td>
                    <td><?php echo $num; ?></td>
                    <td>هزار تومن<?php echo $price - $PRIX; ?></td>
                   
                     
                    <td><?php 
                    if($row['dis']==="on"){
                        echo $discount."% دارد";
                    }else{
                        echo "ندارد";
                    }  
                    ?></td>
                    
                  
                   
                </tr>
               
          <?php  }

         }else{
             echo "<h4 style='color: red;'>هیچ محصولی وجود ندارد</h4>";
         }
        
        ?>
    </table>
</div>

                   
                </div>
                
            </div>
          
        </div>
        
        <!-- modals -->
        
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
    <?php include "linkJS.php"; ?>
       <script>
           

                setInterval(()=>{
                let xhr=new XMLHttpRequest();
                xhr.open("GET","./PHP/order_home_table.php");
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

       </script>
    

        

    </body>
    <?php }else {
        header('location:login.php');
    }?>
</html>