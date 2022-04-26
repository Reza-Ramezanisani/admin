<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update admin</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/order/admin/JS/Qry_edit_ADmin.js"></script>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/UPAdmin.css">

</head>
<body>
     
        <!-- alert -->
        <div id="alert_up" style="display:none;margin: 0 auto;"  class="alert w-50  alert-success ">
            <span class="tosan"></span>
        </div>
    <?php
   if (isset($_GET['id'])){

   

       include "db.php";
       $ID=$_GET['id'];
       $sq="SELECT * FROM bosssite WHERE id='$ID'";
       $result=mysqli_query($conn,$sq) OR die(mysqli_error($conn));
       if(mysqli_num_rows($result) !==0){
           while ($get_result=mysqli_fetch_assoc($result)) {
            $id=$get_result['id'];
            $username=$get_result['username'];
            $mail=$get_result['mail'];
            $tel=$get_result['telephone'];?>
            <form action="#" id="form_edit" method="post" autocomplate="off" >
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            <div class="row mx-2">
                <div class="form-group">
                    <label for="">نام
                        </label>
                        <input class="col-md-4 " maxlength="10"  value="<?php echo $username ?>" type="text" name="username" id=""/>
                        <span class="lo"></span>
                </div>
                <div class="form-group">
                    <label for="">ایمیل
                        </label>
                        <input class="col-md-8 " value="<?php echo $mail ?>" type="mail" name="mail" id=""/>
                        <span class="lo"></span>
                </div>
                <div class="form-group">
                    <label for="">تلفن
                        </label>
                        <input class="col-md-8 " value="<?php echo $tel ?>" maxlength="11" type="tel" name="tel" id=""/>
                        <span class="lo"></span>
                </div>
                
            </div>
            <br>
            
                
            <input  type="submit" style="cursor: pointer;border: 1px solid #000;"  class="sub_edit btn w-100  text-success col " value="ویرایش" />
        </form>
        <?php
        }
       }

           }else {
    header("Location:../admin.php");
}



?>
<div class="div">
<a  href="#"  class=" btn  text-warning col" >ویرایش پسورد</a>
<a href="../admin.php" class="btn text-secondary">بازگشت</a>
</div>








            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            
</body>
</html>