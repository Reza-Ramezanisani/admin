<?php
    session_start();
    include "db.php";
    function between($v,$x,$y){
        $v1=strlen($v);
        return ($v1>=$x && $v1<=$y)?TRUE:FALSE;
    }
    if(isset($_POST['submit'])){
        $rand=rand(time(),100000000);
        $user=mysqli_real_escape_string($conn,$_POST['user']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pwd1=mysqli_real_escape_string($conn,$_POST['pwd1']);
        $pwd2=mysqli_real_escape_string($conn,$_POST['pwd2']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        if(empty($user)|| empty($email)|| empty($pwd1)|| empty($pwd2)|| empty($phone)|| empty($address)){           
            header("Location: index1.php?err=empty");
            
            
        }
        elseif (!preg_match('/^.+[a-zA-Z ]$/',$_POST['user']) || !between($_POST['user'],4,10)) {  
            header("Location: index1.php?err=user");
            
           
        
        }
        
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: index1.php?err=email");      
           
           
        }
        elseif (!preg_match('/^.+[0-9]$/',$phone)|| !between($phone,-1,8)) {
            
            header("Location: index1.php?err=phone");
           
        }
        elseif (!preg_match('/^.+[a-zA-Z\d ]$/',$address)) {            
            header("Location: index1.php?err=address");
           
        }
        elseif (!preg_match('/(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9]).{8,})/',$pwd1) || !strlen($pwd1)>=8) {           
            header("Location: index1.php?err=pwd");
           
           
        }
        elseif ($pwd1 !== $pwd2) {
            header("Location: index1.php?err=pwd12");     
           
       
        }
        else{
            $sql="SELECT mail,username FROM user WHERE mail=? AND username=? LIMIT 1";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: index1.php?err=err");  
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$email,$user);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_num_rows($stmt);
                if($result==1){
                    header("Location: index1.php?err=takenuser"); 
                }
                else{
                    $sql="INSERT INTO user(unique_id,username,mail,psd,ader,tel) VALUES(?,?,?,?,?,?)";
                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: index1.php?err=err2");  
                    }
                    else{
                        $pwd1=password_hash($pwd1,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"issssi",$rand,$user,$email,$pwd1,$address,$phone);
                        mysqli_stmt_execute($stmt);
                        header("Location: index1.php?signup=success"); 
                       
                    }
                }
            }



        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        








    }



?>