<?php
session_start();
if(isset($_POST)){
    require_once "db.php";
   $opwd = htmlspecialchars(stripcslashes(mysqli_real_escape_string($conn,$_POST['opwd'])));
   $npwd = htmlspecialchars(stripcslashes(mysqli_real_escape_string($conn,$_POST['npwd'])));
   $cpwd = htmlspecialchars(stripcslashes(mysqli_real_escape_string($conn,$_POST['cpwd'])));
   if(empty($cpwd) || empty($npwd) || empty($opwd)){
       echo "ورودی خالی است";
       exit();
   }elseif (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",$opwd) || strlen($opwd)<8) {
       echo "پسورد قدیمی نادرست است";
       exit();
   }elseif (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",$npwd) || strlen($npwd)<8) {
    echo "پسورد جدید نادرست است";
    exit();
    }elseif ($npwd !== $cpwd) {
    echo "تایید پسورد با پسورد جدید مطابقت ندارد ";
    exit();
    }else{
       $sql = "SELECT mail,pwd FROM bosssite WHERE mail=?  LIMIT 1";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
           echo "خطا وجود دارد";
           exit();
       }else{
          
           mysqli_stmt_bind_param($stmt,"s",$_SESSION['email']);
           mysqli_stmt_execute($stmt);
           $result= mysqli_stmt_get_result($stmt);
           if(mysqli_num_rows($result) > 0){
               $fetch=mysqli_fetch_assoc($result);
               $databse_opwd=$fetch['pwd'];
               $verify_pwd=password_verify($opwd,$databse_opwd);
               if($verify_pwd){
                    $sql1 = "UPDATE bosssite SET pwd=? WHERE mail=? ";
                    $stmt1=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt1,$sql1)){
                        echo "خطا وجود دارد";
                        exit();
                    }else{
                        $new_pwd=password_hash($npwd,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt1,"ss",$new_pwd,$_SESSION['email']);
                        mysqli_stmt_execute($stmt1);
                        echo "پسورد آپدیت شد";
                    }
               }else{
                   echo "پسورد ی به این ورودی شناسایی نشد";
               }
               
           }
     }
    }

}else{
    header("Location: login.php");
}