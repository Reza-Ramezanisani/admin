<?php
    $conn=mysqli_connect("localhost",'root','',"msg");
    if(mysqli_connect_error($conn)){
        echo "error server";
    }
if(isset($_POST['msg'])){
    $msg= mysqli_real_escape_string($conn,$_POST['msg']);
    $id= mysqli_real_escape_string($conn,$_POST['id']);
    $id_id= 0;
    if(empty($msg)){
        echo "ورودی پیغام خالی است";
    }elseif (!preg_match('/[a-zA-Z ]+/',$msg)) {
        echo "فقط حروف مورد تایید است";
    }else{
        $sql = "INSERT INTO m(receiver_id,sender_id,msg) VALUES(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Error on server";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"iis",$id,$id_id,$msg);
        mysqli_stmt_execute($stmt);
        echo "was sended";
    }
}
}
?>