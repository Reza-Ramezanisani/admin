<?php 
 if(isset($_POST['id'])){
     require "db.php";
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $sql="DELETE FROM menu WHERE ID='$id'";
    $res=mysqli_query($conn,$sql);
    echo "با موفقیت پاک شد";
 }else{
     header("Location: ../menu_list.php");
 }


?>