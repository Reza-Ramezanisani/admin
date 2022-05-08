<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/RESEtPassword.css">
    <script  src="http://localhost/order/admin/JS/reset_Pwd.js"></script>
   
</head>
<body>
    <form action="PHP/verifay_email.php" method="post" class="resetPassword">
        <div class="err"></div>
        <h1>reset password</h1>
        <br><br>
        <div class="form-group">
            <label for="main">E-mail</label>
            <input type="email" name="main" id="main">
            <input type="submit" name="submit" id="btn_submit" value="ارسال">
        </div>
    </form>
    <br>
    <br>
   
</body>
</html>