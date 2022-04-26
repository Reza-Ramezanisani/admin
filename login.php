<?php session_start();
      $token = md5(uniqid(rand(),TRUE));
      $_SESSION['token']=$token;

   
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/order/admin/CSS/log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Open+San|Audiowide&effect=fire|neon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="http://localhost/order/admin/JS/loginAj.js"></script> -->
</head>
<body onload='textEffect()'>
    <div class="color">

    </div>
    <?php
        if(isset($_GET['err'])){
            $err=$_GET['err'];
            if($err==='empty'){
                echo "<h1 style='color:red'>ورودی ها خالی هستند</h1>";
            }elseif ($err==='err0') {
               
             echo "خطا وجود دارد";
            }elseif ($err==='pwd') {
                echo "<h1 style='color:red'>پسورد درست نیست</h1>";
            // echo "<div style='display:flex;align-items: center;justify-content: center;'><h1 style='color:green'>تمامی ورودی ها درست است </h1><a style='border: none;padding: 5px;margin-left: 5px;border-radius: 12px;color: white;;outline:none;background: green;z-index: 500;' href='index.php'>ورود به پنل آدمین</a></div>";
                
            }elseif ($err==="err1") {
                echo "خطا وجود دارد";
            }elseif ($err==="take") {
                echo "<h1 style='color:red'>این ادمین وجود ندارد</h1>";
                
            }
        }

    ?>
    <div class="login">
        <h1 id='login' class="font-effect-fire">ورود </h1>
        <form action="PHP/loginServer.php" id='form' method="post" autocomplete="off">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <div class="form-group " >
                <input type="email" name="mail"  placeholder="ایمیل را وارد کنید">
                <i class="fas fa-user"></i>
            </div>
            <div class="form-group ">
                <input type="password" name="pwd" placeholder="پسورد را وارد کنید">
                <i class="fas fa-key"></i>
            </div>
            <!-- <div class="form-group ">
               <img src="captcha.php"/>
                
            </div> -->
            <div class="form-group " >
                <input type="submit" id="sub" name="submit" value="ورود">
               
            </div>
            <br>
            <div class="form-group check"  style="color:black">
               <input type="checkbox"  >مرا به خاطر بسپار
                <span></span>
            </div>
        </form>
        <a href="#">پسوردم را فراموش کردم</a>
        <a href="#">دوباره تنظیم کردن پسورد</a>
    </div>
    <div class="k"></div>
    <!-- <script>
        var i=0;
        function textEffect(){
        const elem=document.getElementById("login");
        var text="ورود ادمین";
        if(i<text.length){
            elem.innerHTML+= text.charAt(i);
            i++;
            }
            setTimeout(textEffect,200);

        }
    </script> -->
</body>

</html>