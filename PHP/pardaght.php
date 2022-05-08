<?php

if(isset($_POST['id'])){
require "db.php";
$id=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));

if(empty($id)){
    echo "خطا";
    exit();
}
else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$id)){
            echo "خطا";
            exit();
            
    }else{
    
        $sql = "UPDATE order_menu SET pardaght_no_yes='yes' WHERE id=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "خطا وجود دارد";
            exit();
        }else{
            
            mysqli_stmt_bind_param($stmt,"i",$id);
            mysqli_stmt_execute($stmt);
            echo "<i class='text-success'> ثبت شد</i>";
        }
       
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}else {
    header("Location:../orders.php");
}




?>
