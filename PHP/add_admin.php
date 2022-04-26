<?php
function leng($val,$x,$y){
    $lengval=strlen($val);  
    return ($lengval>=$x && $lengval<=$y)?TRUE:FALSE;
}
if(isset($_POST['user'])){
require "db.php";
$user=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['user']));
$mail=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['mail']));
// tel
$tel=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['telephone']));
$pwd=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pwd']));
$pwd2=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pwd2']));

if(empty($user) || empty($mail) ||empty($pwd) || empty($tel)){
    echo "ورودی ها خالی هستند";
    
}
else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$user)){
            echo "نام باید فقط حروف (انگلیسی یا فارسی) یا عدد باشد";
            
    }
elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    echo  "ایمیل نامعتبر است";
}elseif (!preg_match("/^[0-9]+$/",$tel)) {
    echo "شماره تلفن موبایل باید فقط عدد باشد";
}elseif (strlen($tel) !== 11 ) {
    echo " تعداد ارقام تلفن موبایل نادرست است";
}
elseif (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}/",$pwd) || strlen($pwd)<8) {
    echo "پسورد نامعتبر است";
}
elseif ($pwd !== $pwd2) {
    echo "دو تا پسورد با هم همخوانی ندارند";
}
else {
    $sql_num_member='SELECT username FROM bosssite';
    $result_num_member=mysqli_query($conn,$sql_num_member);
     echo mysqli_num_rows($result_num_member);
    $sql="SELECT * FROM bosssite WHERE username=? AND mail=? LIMIT 1";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "خطا وجود دارد";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$user,$mail);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result=mysqli_stmt_num_rows($stmt);
        if($result !==0 ){
            echo "این ادمین در لیست وجود دارد";
        }else{
            $pwd_hash=password_hash($pwd,PASSWORD_DEFAULT);
            $sql="INSERT INTO bosssite (username,mail,telephone,pwd) VALUES(?,?,?,?)";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "خطا وجود دارد";
                exit();
            }else{
                
                mysqli_stmt_bind_param($stmt,"ssss",$user,$mail,$tel,$pwd_hash);
                mysqli_stmt_execute($stmt);
                echo "<i class='text-success'>ادمین با موفقیت ثبت شد</i>";
            }
        }
        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
}else {
    header("Location:../admin.php");
}




?>