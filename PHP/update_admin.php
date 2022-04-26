<?php

require_once "db.php";

if(isset($_POST['id'])){
    $id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
    $username = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['username']));
    $mail = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mail']));
    $tel = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['tel']));
    if ( empty($mail) || empty($username) || empty($tel) ) {
        echo "<span class='text-danger'>ورودی ها خالی هستند</span>";
        
    }
    elseif(!preg_match("/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی ]+$/",$username)){
        echo "<span class='text-danger'>نام نامعتبر است</span>";
        
    }
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL) ) {
        echo "<span class='text-danger'>ایمیل نامعتبر است</span>";
        
    }elseif (!preg_match("/^[0-9]+$/",$tel)) {
        echo "<span class='text-danger'>شماره تلفن موبایل باید فقط عدد باشد</span>";
    }elseif (strlen($tel) !== 11 ) {
        echo " <span class='text-danger'>تعداد ارقام تلفن موبایل نادرست است</span>";
    }else{

        $sql = "UPDATE bosssite SET username=?,mail=?,telephone=? WHERE id=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "خطا";
            
        }else {
            mysqli_stmt_bind_param($stmt,"sssi",$username,$mail,$tel,$id);
            mysqli_stmt_execute($stmt);
            echo "با موفقیت ویرایش شد";
        }
    }
    
}else{
    header("Location:../admin.php");
}






?>