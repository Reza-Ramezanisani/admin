<?php
session_start();
if(isset($_POST['submit'])){
    if($_SESSION['token'] === $_POST['token'] ){

     require "db.php";
    $mail=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mail']));
    $password=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pwd']));
    unset($_SESSION['token']);
    if(empty($mail) || empty($password)){
        header("Location:../login.php?err=empty");
        
        exit();
    }else{
        $sql="SELECT * FROM bosssite WHERE mail=? ";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../login.php?err=err0");
            exit();
            

        }else{
            
            mysqli_stmt_bind_param($stmt,"s",$mail);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $password_check=password_verify($password,$row['pwd']);
                if($password_check===true){
                    $_SESSION['id']=$row['id'];
                    $_SESSION['username']=$row['username'];
                    header("Location:../menu_list.php");
                    exit();
                }elseif($password_check===false){
                    header("Location:../login.php?err=pwd");
                    exit();

                    
                }
                else {
                    header("Location:../login.php?err=err1");
                    exit();

                }
            }else{
                header("Location:../login.php?err=take");
                exit();

            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    
            }else{
         header("Location:../login.php");

            }
}else{
      header("Location:../login.php");
 }



?>