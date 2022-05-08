<?php
include_once "PHP/db.php";
 $sql1 = "SELECT DISTINCT email,name_msg,img,unique_id FROM users AS U LEFT JOIN m  on m.sender_id=U.unique_id WHERE NOT name_msg='admin';";
 $result=mysqli_query($conn,$sql1);
 $output='';
 while ($row=mysqli_fetch_assoc($result)) {
    // $Time_now=time();
    // $time_sub= $Time_now - $row['time_msg'];
    // if ($time_sub > 3600) {
    //     $time_sub = "ساعت پیش".round($time_sub  / 3600);
     
        
    // }elseif($time_sub > 60){
    //     $time_sub = "دقیقه پیش".round($time_sub  / 60);
      

    // }else{
    //     $time_sub = "لحضاتی پیش";
       

    // }

    $sql2="SELECT msg FROM m WHERE sender_id='{$row['unique_id']}' ORDER BY id_msg DESC LIMIT 1";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $sql3="SELECT COUNT(msg),sender_id FROM m WHERE sender_id='{$row['unique_id']}'";
    $result3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_assoc($result3);
    if(empty($row2['msg'])){
        $row2['msg']="";
    }
     $output .='
            <div style="position: relative;border-bottom: 6px dashed lightblue;" class="msg_inbox py-2">
                    <a style="text-decoration: none;cursor: pointer;color: #000;" href="msg.php?id='.$row['unique_id'].'"  class="msg d-flex">
                    
                    <div class="mx-3" style="width: 50px;height: 50px;"><img src="./../users/upload/'.$row['img'].'" alt=""></div>
                    <div style="border-left: 1px dashed lightblue;" class="msg-text px-4">
                        <h4><ins><q>'.$row['name_msg'].'</q></ins></h4>
                        <p><i style="color:yellow;" ></i>ایمیل: '.$row['email'].'</p>
                        <i style="color:yellow;" class="fas fa-envelope"></i> تعداد پیام ها:'.$row3['COUNT(msg)'].'
                        <p><i style="color:yellow;" class="fas fa-envelope"></i> '.$row2['msg'].'
                        </p>
                       
                        </div>
                        
                        
                        
                        </a>
                        </div>
                        ';
                    }
                    echo $output;
                    // <p style="position: absolute;top: 20%;right: 0;">'.$time_sub.' </p>





?>
