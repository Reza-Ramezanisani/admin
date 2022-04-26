<?php
  if(isset($_POST['name'])){
      include "db.php";
    $name=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['name'])));
    $num=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['num'])));
    $cat=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['cat'])));
    $price=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['price'])));
    $desc=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['desc'])));
    // date_default_timezone_set('Asia/Tehran');
    // $time= date('Y-m-d H:i:s');
    // print_r($_POST);
   
    if(isset($_POST['dis'])){
        $dis=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dis']));
    }else{
        $dis="off";
    }
    if(isset($_POST['status'])){
        $status=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['status']));
    }else{
        $status="off";
    }
    if(empty($desc)){
        $desc="بدون توضیحات";
        
    }
    

   
    
    
    if(empty($name) || empty($num)  || empty($price)){
         echo "<span class='text-danger'>ورودی نام و توضیحات نباید خالی باشد</span>";
         exit();
    }elseif (!preg_match("/^[0-9]+$/",$num)) {
         echo "<span class='text-danger'>ورودی تعداد محصول باید فقط عدد باشد</span>";
         exit();

    }elseif (!preg_match("/^[0-9]+$/",$price)) {
        echo "<span class='text-danger'>ورودی قیمت باید فقط عدد باشد</span>";
        exit();

   }elseif (!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$name)) {
        echo "<span class='text-danger'>ورودی نام محصول باید حروف و عدد (انگلیسی یا فارسی) باشد</span>";
        exit();

    }elseif (!preg_match("/[0-9]/",$cat)) {
        echo "<span class='text-danger'>ورودی بسته بندی اشتباه است</span>";
        exit();
    }elseif (!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$desc)) {
        echo "<span class='text-danger'>ورودی توضیحات باید حروف و عدد (انگلیسی یا فارسی) باشد</span>";
        exit();
    }elseif (strlen($desc) > 120) {
        echo "<span class='text-danger'>ورودی توضیحات حداکثر 120 کاکتر می باشد</span>";
        exit();
    }else {
        $sql="SELECT name_menu FROM menu WHERE name_menu=? ";
        
        $stmt=mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql)){
             echo "<span class='text-danger'>خطا</span>";
              exit();

         }else{
             mysqli_stmt_bind_param($stmt,"s",$name);
             mysqli_stmt_execute($stmt);
             $res=mysqli_stmt_get_result($stmt);
             if(mysqli_num_rows($res)===0){
             
              $sql="INSERT INTO menu (name_menu,category,number_menu,price,desc_menu,status_menu,dis)
              values(?,?,?,?,?,?,?);
              ";
              $stmt=mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo "<span class='text-danger'>خطا</span>";
               exit();

              }else{
                  mysqli_stmt_bind_param($stmt,"siiisss",$name,$cat,$num,$price,$desc,$status,$dis);
                  mysqli_stmt_execute($stmt);
                  $result=mysqli_stmt_get_result($stmt);
                  echo "<span class='text-success'>".$name." ثبت شد</span>";
                  
              }
         }else {
            echo "<span class='text-danger'>      این محصول ثبت شده است</span>";
             

        }
            
        }
    }
    if($_FILES['img']['error']!==4){
        $basename=md5(uniqid(rand(),TRUE));
        $type_img=explode("/",$_FILES['img']['type'])[1];
        $extension=$_FILES['img']['type'];
        $path="upload_menu/".$basename.'.'.$type_img;
        $tmp_name=$_FILES['img']['tmp_name'];
        $size=$_FILES['img']['size'];
        $name_img=$basename.'.'.$type_img;
        if(getimagesize($tmp_name)){
           if ($extension != "image/jpg" && $extension!= "image/png" && $extension != "image/jpeg" && $extension != "image/if") {
                echo "<span class='text-warning'>فقط فرمت png  jpg jpeg  gif مورد قبول است</span>";
                exit();
            }elseif ($size /1024/1024 >1) {
                echo "<span class='text-danger'> حجم عکس زیاد است</span>";
                exit();
            }
            else {
                if(move_uploaded_file($tmp_name,$path)){
                    $sql="UPDATE  menu  SET img=? WHERE name_menu=?";
                    $stmt=mysqli_stmt_init($conn);
                     if(!mysqli_stmt_prepare($stmt,$sql)){
                         echo "<span class='text-danger'>خطا</span>";
                          exit();
            
                     }else{
                         mysqli_stmt_bind_param($stmt,"ss",$name_img,$name);
                         mysqli_stmt_execute($stmt);
                         echo "<span class='text-success'>عکس با موفقیت آپلود شد</span>";
                     }
                }else {
                  echo "<span class='text-danger'>خطا</span>";
                    
                }
            }
        }else{
        echo "<span class='text-danger'> این فایل عکس نیست دوباره آپلود کنید</span>";
            
        }

    }else{
        echo "<span class='text-warning'>  عکسی را انتخاب نکرده اید </span>";
        
    }
    


    }
  else {
      header("Location: ../add_product.php");
  }
?>