<?php
  include_once "db.php";
  $sql = "SELECT img,name_msg,sender_id,msg,receiver_id FROM m LEFT JOIN users AS u ON u.unique_id=m.sender_id WHERE sender_id='{$_POST['id']}' OR receiver_id='{$_POST['id']}' ORDER BY id_msg ASC";
  $result  = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    if($row['name_msg']===NULL){
      $row['name_msg']="admin";
      $admin="admin";
      $row['img']="admin.png";
    }else{
      $admin="";
    }
    echo' <div class="msg '.$admin.'" style="position:relative;margin-top: 50px;">
          
          <div class="img" style="width: 50px;height: 50px;"><img  style="width:100%;height: 100%;border-radius:50%" src="./../users/upload/'.$row['img'].'" alt=""></div>
            <span  style="background:white;color:black;padding:10px;border-radius:10px">'.$row['name_msg'].'</span>
            <p >'.$row['msg'].'</p>
          
       </div>';
  }
  

  




?>