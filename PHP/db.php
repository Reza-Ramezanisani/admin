<?php

$conn=mysqli_connect("localhost","root","","order-food");
if(!$conn){
    echo mysqli_connect_errno();
    echo " Error";
}

?>
   