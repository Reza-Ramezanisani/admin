<?php
session_start();
if(isset($_POST['email'])){
    require_once "db.php";
   $email = htmlspecialchars(stripcslashes(mysqli_real_escape_string($conn,$_POST['email'])));
   if(empty($email)){
       echo "ورودی خالی است";
       exit();
   }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
       echo "ایمیل نادرست است";
       exit();
   }else{
       $sql = "SELECT mail FROM bosssite WHERE mail=? LIMIT 1";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
           echo "خطا وجود دارد";
           exit();
       }else{
           mysqli_stmt_bind_param($stmt,"s",$email);
           mysqli_stmt_execute($stmt);
          $result= mysqli_stmt_get_result($stmt);
           if(mysqli_num_rows($result) > 0){
                $_SESSION['email']=$email;
                // header("Location:setPassword.php");
                echo "s";
           }else{
               echo "این ایمیل وحود ندارد";

           }
     }
    }

}else{
    header("Location: login.php");
}