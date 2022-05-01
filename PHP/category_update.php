<?php



if(isset($_POST['name'])){
    require_once "db.php";
    $username = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
    $id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
    if (empty($username)  ) {
        echo "<span class='text-danger'>ورودی خالی هست</span>";
        
    }
    elseif(!preg_match("/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی ]+$/",$username)){
        echo "<span class='text-danger'>نام نامعتبر است</span>";
        
    }else{

        $sql = "UPDATE category SET name_cat=? WHERE id=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "خطا";
            
        }else {
            mysqli_stmt_bind_param($stmt,"ss",$username,$id);
            mysqli_stmt_execute($stmt);
            echo "با موفقیت ویرایش شد";
        }
    }
    
}else{
    header("Location:../category.php");
}






?>