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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="npm/node_modules/toastr/build/toastr.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="add_pr.js"></script>
    <script src="sidebar.js"></script> -->
    <script src="http://localhost/order/admin/JS/Add_product.js"></script>
    <script src="http://localhost/order/admin/JS/DIS.js"></script>
   <?php include "link.php"?>
   
    
  
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
            .main h2{
                font-size: 20px;
            }
            .input_table{
                max-width: 100%;
            }
            .main form{
                max-width: 100%;
                border: 1px solid #000;
                margin: 0;
            }
            .main form .row{
               width: 100%;
               margin: 0 auto;
            }
            .main form .row.file{
                display: grid;
            }
            .main form .row.file .form-group.PRice{
                display: grid;
            }
            .main #alert{
                height: 150px;
                width: 50%;
                margin: 0 auto;
            }
            .side div.side_content.act{
                width: 130px;
            }
        

        }
    </style>
</head>
<?php if(isset($_SESSION['id'])){?>
<body onload="load()" >

<div class="preloader">
            <div class="spinner"></div>
        
        </div>
        <?php include "nav.php";?>
        <?php include "nav-top.php";?>
        <?php include 'profile.php';?>

        <br>
  <div class="main  " >
      
  <?php include "clock.php"?>
  <br>
  <br>
  <br>
      
         
            <h2 class="mx-2" dir='rtl'>افزودن محصول</h2>
        
            <hr>
         <form class="" action="#" id='form' method="post" style="padding: 20px;">
         <div id="alert" dir="rtl" style="display: none;position: fixed;transform:translateX(-50%);text-align: center;overflow: auto;"  class="alert alert-info fade show alert-dismissible ">
            <div style="float: right;cursor: pointer;color: white;" data-bs-dismiss="alert" class="btn-close">&times;</div>
            <span>This is text</span>
         </div>
            <div class="row">
                <div class="form-group col-md"><span class="text-muted" dir='rtl'>نام محصول</span><input name="name"  class="form-control " type="text"></div>
                <div class="form-group col-md"><span class="text-muted" dir='rtl'>دسته بندی</span><select name="cat" class='form-control' id="">
                    <?php
                    require "PHP/db.php";
                    $sql = "SELECT * FROM category";
                    $query = mysqli_query($conn,$sql);
                    while ($res=mysqli_fetch_assoc($query)) {
                        echo "<option value=".$res['id'].">".$res['name_cat']."</option>";
                        
                    }
                    ?>
                </select>
            </div>
            <div class="row file">
                <div class="form-group col-md"><span class="text-muted"  >تعداد</span><input min="1" name="num" class='form-control' value="1" maxlength='3' type="number"></div>
                <div class="form-group PRice col-md my-4"><input class='price_range' name="price" min="1" value="25" type="range" oninput="rang(this)"><label class="text-muted mx-1">  <span id="demo_range" dir="rtl">قیمت :   هزار تومن 100</span></label> </div>
            </div>
            <div class="row file">
                <div class="form-group col my-4"><input class='form-control'  onchange="preview(this)" accept="image/*" type="file" name="img" id=""></div>
               
                <div  class="col my-4 "><img id="photo" src="" alt=""></div>
            </div>
            
            
            <div class="form-group col-md"><br><span class="text-muted">بخش توضیح محصول</span><textarea name="desc" class='form-control'  placeholder="توضیحات" id="" cols="10" rows="10" maxlength='120' value=' ' dir="rtl"></textarea></div>
            <span>وضعیت در انبار</span>   <input type="checkbox" checked name="status" id="a"> 
            <span>تخفیف </span>   <input type="checkbox"  name="dis" id="b"> 
            <div class="form-group col-md" id='DISCOUNT' style="display: none;"  >
                <input type="number" max="99" style="width: 50%;margin-left:25%;" min="1" name="discount_num" placeholder="چند درصد تخفیف" />
            </div>
           
            <div class="form-group">
           
                <br>
                <input type="submit" id="sub_product" class='form-control bg-success' value="ثبت محصول">
                <br>
                <input type="reset"  class='form-control bg-primary' name="" id="" value="ریستارت کردن">
                <br>
                <br>
            </div>
            
        </form>


    </div>
    
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!-- <script src="JS.js"></script> -->
        <?php include "linkJS.php"?>
        <script>


            // clock
        function time() {
        let h=document.getElementById("h");
        let m=document.getElementById("m");
        let s=document.getElementById("s");
        let date=new Date();
        let hours=date.getHours();
        let mins=date.getMinutes();
        let seconds=date.getSeconds();
        hours=(hours<10)?"0"+hours:hours;
        mins=(mins<10)?"0"+mins:mins;
        seconds=(seconds<10)?"0"+seconds:seconds;
        h.innerHTML=hours;
        m.innerHTML=mins;
        s.innerHTML=seconds;
        }
        setInterval(time,1000);
        time();
      

        </script>
    <!-- <script src="npm/node_modules/toastr/toastr.js"></script> -->
    <!-- <script src="tos.js"></script> -->
        

    
</body>
<?php  
        }else{
            header("Location:login.php");
        }
?>
</html>