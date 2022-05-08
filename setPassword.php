<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/REsetPassword.css">
    <script  src="http://localhost/order/admin/JS/setPassword.js"></script>
    <title>set passwrod</title>
</head>
<body>
    <?php if(isset($_SESSION['email'] )){?>
    <form action="PHP/verifay_email.php"  method="post" class="resetPassword setpassword" >
            <div class="err"></div>
            <h1>set password</h1>
            <br><br>
            <div class="form-group">
                <label for="main1">پسورد قدیمی</label>
                <input type="password" name="main" id="main1">
            
            </div>
            <br>
            <br><br>
            <div class="form-group">
                <label for="main2">پسورد جدید</label>
                <input type="password" name="main" id="main2">
              
            </div>
            <br>
            <br><br>
            <div class="form-group">
                <label for="main3">تایید پسورد</label>
                <input type="password" name="main" id="main3">
            </div>
            <input type="submit"   name="submit" id="btn_submit" value="ارسال">
        </form>

   <?php }else{
        header("Location:resetPassword.php");
    }
    
    ?>
</body>
</html>