<?php

if(isset($_POST['name'])){
    require "db.php";
    $name=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
    if(empty($name)){
        echo "ورودی خالی هست";
        
    }
    else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$name)){
                echo "نام باید فقط حروف (انگلیسی یا فارسی) یا عدد باشد";
                
    }else{
    $sql="SELECT * FROM category WHERE name_cat=? LIMIT 1";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "خطا وجود دارد";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"s",$name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result=mysqli_stmt_num_rows($stmt);
        if($result !==0 ){
            echo "این بسته بندی در لیست وجود دارد";
        }else{
            $sql="INSERT INTO category (name_cat) VALUES(?)";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "خطا وجود دارد";
                exit();
            }else{
                
                mysqli_stmt_bind_param($stmt,"s",$name);
                mysqli_stmt_execute($stmt);
                echo "<i class='text-success'>ثبت شد</i>";
            }

        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}else{
    header("Location:../category.php");
    
}