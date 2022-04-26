
<?php
$hash=password_hash("reza",PASSWORD_DEFAULT);
  $check=password_verify("reza",$hash);
  if($check===true){
      echo "yes";
  }elseif ($check===false) {
      echo "no";
  }
  else{
     echo  "err";
  }
    ?>



