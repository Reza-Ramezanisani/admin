<?php



    include "db.php";
    $id=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
    $sql="DELETE FROM bosssite WHERE id=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<p class='text-danger'>خطا </p>";
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        echo "<p class='text-success fs-5'>ادمین پاک شد</p>";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
   




?>