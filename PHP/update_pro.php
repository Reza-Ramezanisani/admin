<?php 
 if(isset($_POST['username'])){
     function leng($val,$x,$y){
         $valleng=strlen($val);
         return ($valleng >= $x && $valleng <= $y)?TRUE:FALSE;
     }
     require 'db.php';
    $user=trim(htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['username']))));
    $mail=trim(htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['mail']))));
    $tel=trim(htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['tel']))));
    $id=trim(htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['id']))));
   
    if(empty($user) || empty($mail)  || empty($tel)){
        echo "<span class='text-danger'>ورودی ها خالی هستند</span>";
        
        exit();
    }elseif (!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$user) ) {
        echo "<span class='text-danger'>نام ادمین  نامعتبر است</span>";
        exit();
    }elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
        echo "<span class='text-danger'>ایمیل نامعتبر است</span>";
        exit();
    }elseif (!preg_match("/^[0-9]+$/",$tel) ) {
        echo "<span class='text-danger'>تلفن نامعتبر است</span>";
        exit();
    }elseif (strlen($tel) !== 11 ) {
        echo "<span class='text-danger'>تعداد ارقام شماره تلفن موبایل نادرست است</span>";
       exit();
    }else{
       $sql="UPDATE bosssite SET username=?,mail=?,telephone=? WHERE id=?";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "خطا";
            exit();
       }else {
           
           mysqli_stmt_bind_param($stmt,"sssi",$user,$mail,$tel,$id);
           mysqli_stmt_execute($stmt);
           echo "<span class='text-success'>اپدیت موفقیت آمیز بود</span>";

          
           
       }
    }
    if($_FILES['file']['error']!==4){
        if(getimagesize($_FILES['file']['tmp_name'])){
           $basename= md5(uniqid(rand(),TRUE));
          
        //    $basename=pathinfo($name_img,PATHINFO_BASENAME);
        //    $exten=strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
           $exten=$_FILES['file']['type'];
           $type_img=explode("/",$_FILES['file']['type'])[1];
           $img_name=$basename.".".$type_img;
           $size=$_FILES['file']['size'];
           $tmp_name=$_FILES['file']['tmp_name'];
           $path="upload/".$basename.".".$type_img;
           if(file_exists($path)){
            echo "<span class='text-danger'>نمونه این عکس وجود دارد عکس دیگری انتخاب کنید</span>";
               exit();
           }
           if ($size /1024/1024 >1) {
                echo "<span class='text-danger'> حجم عکس زیاد است</span>";
                exit();
            }elseif ($exten !="image/png" &&  $exten !="image/jpg" &&  $exten !="image/gif" && $exten !="image/jpeg" ) {
                echo "<span class='text-danger'>مجاز است PNG,JPG,GIF,JPEG فقط فرمت </span>"; 
                exit();
            }else{
                if(move_uploaded_file($tmp_name,$path)){
                   
                    $sql="UPDATE bosssite SET img=? WHERE id=?;";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                         echo "خطا";
                         exit();
                    }else {
                        // $GLOBALS['img']=$basename;
                        mysqli_stmt_bind_param($stmt,"si",$img_name,$id);
                        mysqli_stmt_execute($stmt);
                    }

                    echo "<span class='text-success'> عکس آپلود شد برای دیدن عکس پروفایل خود یک بار صفحه را رفرش کنید</span>";

                   

                }else{
                      echo "<span class='text-danger'>خطا</span>";  
                      exit();
                    }
                }
            }
    }
    mysqli_close($conn);
    mysqli_stmt_close($stmt);
    }else{
        header('location:../index.php');
 }


?>