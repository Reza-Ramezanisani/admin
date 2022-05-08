<?php
   include_once "PHP/db.php";
if(isset($_POST['msg'])){
    $msg= htmlspecialchars(mysqli_real_escape_string($conn,$_POST['msg']));
    $id= htmlspecialchars(mysqli_real_escape_string($conn,$_POST['id']));
    $id_id= 0;
    if(empty($msg)){
        echo "ورودی پیغام خالی است";
        exit();
    }elseif (!preg_match('/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/',$msg)) {
        echo "فقط حروف مورد تایید است";
        exit();
    }else{
        $sql = "INSERT INTO m(receiver_id,sender_id,msg) VALUES(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Error on server";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"iis",$id,$id_id,$msg);
        mysqli_stmt_execute($stmt);
        echo "فرستاده شد";
    }
}
}
?>