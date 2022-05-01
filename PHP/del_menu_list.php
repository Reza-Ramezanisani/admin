<?php 
 if(isset($_POST['id'])){
     require "db.php";
    $id=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
    $sql="DELETE FROM menu WHERE id=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "خطا وجود دارد";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
          echo "با موفقیت پاک شد";
    }
 }else{
     header("Location: ../menu.php");
 }


?>