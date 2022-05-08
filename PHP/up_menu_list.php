<?php

  if (isset($_POST['id'])) {
    require "db.php";
    $id=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['id'])));
    $name=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['name'])));
    $cat=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['cat'])));
    $no=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['no'])));
    $price=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['price'])));
    $desc=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['desc'])));
    $discount_num=htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['discount_num'])));
    settype($id,'integer');
    // print_r($_POST);
    
    // برای دکمه های چک
    if(isset($_POST['dis'])){
      $dis=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['dis']));
      if ($discount_num > 99 || $discount_num < 1 ) {
        echo "<span class='text-danger'>ورودی تخفیف بین 1 تا 99  درصد  می باشد</span>";
        exit();
      }elseif (!preg_match("/^[0-9]+$/",$discount_num)) {
        echo "<span class='text-danger'>ورودی تخفیف باید فقط عدد یا عدد مثبت باشد</span>";
        exit();
      
      }

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
 
  //  if($status === "on"){
  //    $status='موجود است';
  //  }else{
  //    $status='موجود نیست';
  //  }      
  //  if($dis === "on"){
  //    $dis="دارد";
  //  }else{
  //    $dis='ندارد';
  //  }      

    if(empty($name)  || empty($no) || empty($price) ){
      echo " ورودی خالی است یا تعداد محصولات صفر نباید باشد ";
      exit();
      
    }elseif (!preg_match("/^[0-9]+$/",$no)) {
      echo "<span class='text-danger'>ورودی تعداد محصول باید فقط عدد یا عدد مثبت باشد</span>";
      exit();

 }elseif (!preg_match("/^[0-9]+$/",$price)) {
     echo "<span class='text-danger'>ورودی قیمت باید فقط عدد باشد</span>";
     exit();

}elseif (!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$name)) {
     echo "<span class='text-danger'>ورودی نام محصول باید حروف و عدد (انگلیسی یا فارسی) باشد</span>";
     exit();

 }elseif (!preg_match("/[0-9]/",$cat)) {
     echo "<span class='text-danger'>ورودی بسته بندی  اشتباه است</span>";
     exit();
 }elseif (!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$desc)) {
     echo "<span class='text-danger'>ورودی توضیحات باید حروف و عدد (انگلیسی یا فارسی) باشد</span>";
     exit();
 }elseif (strlen($desc) > 120) {
     echo "<span class='text-danger'>ورودی توضیحات حداکثر 120 کاکتر می باشد</span>";
     exit();
 }elseif ($no < 1) {
     echo "<span class='text-danger'>ورودی تعداد محصولات نمیتواند عدد منفی باشد</span>";
     exit();
 
 }else{

  $sql="UPDATE menu SET name_menu=?,category=?,number_menu=?,price=?,desc_menu=?, status_menu=?,dis=?,discount_num=? WHERE ID=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
      echo "خطا";
      exit();
  }else{
      mysqli_stmt_bind_param($stmt,"siiisssii",$name,$cat,$no,$price,$desc,$status,$dis,$discount_num,$id);
      mysqli_stmt_execute($stmt);
      echo "<span style='color:white'>آپدیت موفقیت آمیز بود</span>";
    } 
}

 
   
  
    
if($_FILES['img']['error']!==4){
      
      
 
            $basename=md5(uniqid(rand(),TRUE));
            $type_img=explode("/",$_FILES['img']['type'])[1];
            $img_name=$basename.".".$type_img;
            $size=$_FILES['img']['size'];
            $tmp_name=$_FILES['img']['tmp_name'];
            $exten=$_FILES['img']['type'];
            $path="upload_menu/".$basename.".".$type_img;
            $tmp_name=$_FILES['img']['tmp_name'];
            $ex=pathinfo($basename,PATHINFO_EXTENSION);
                if(getimagesize($tmp_name)){
                  if(file_exists($path)){
                  echo "<span style='color:white'>این عکس موجود است</span>";
                  }elseif ($size /1024/1024 >1) {
                    echo "<span class='text-danger'> حجم عکس زیاد است</span>";
                    exit();
                }elseif ($exten != "image/jpg" && $exten != "image/jpeg" && $exten != "image/gif" && $exten != "image/png" ) {
                    echo "<span style='color:white'>فقط فرمت png jpg jpeg gif </span>";
                  }else{
                    if(move_uploaded_file($tmp_name,$path)){
                    $sql="UPDATE menu SET img=? WHERE ID=?";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        echo "خطا";
                        exit();
                    }else {
                        // $GLOBALS['img']=$basename;
                        mysqli_stmt_bind_param($stmt,"si",$img_name,$id);
                        mysqli_stmt_execute($stmt);
                        echo "<span style='color:white'>عکس جدید آپلود شد</span>";
                    }
                    
                  }else {
                  echo "<span style='color:red'>خطا</span>";
                    
                  }
                }
                    
                }else {
                  echo "<span style='color:red'>این فایل عکس نیست</span>";
                
                }
         }

          
        
        
        
    
 mysqli_stmt_close($stmt);
 mysqli_close($conn);

  



}else {
     header("Location: ../menu_list.php");
  }
  
?>