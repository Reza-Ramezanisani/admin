<div class="table-responsive-xl">
              <table  class="table table-dark table-borderless">
              <tr>
                           <th>name</th>
                           <th>name menu</th>
                           <th>Email</th>
                           <th>tel</th>
                           <th>address</th>
                           <th>count order</th>
                           <th>category</th>
                           <th>price</th>
                           <th>discount</th>
               </tr>
                       
            
<?php
require "./PHP/db.php";
$sql = 'SELECT * FROM order_menu';
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    if($row['dis']==="on"){
        $row['dis']="yes";
    }else{
        $row['dis']="no";
    }
echo ' 
            
    <tr>

                <td>'.$row['fname'].'</td>
                <td>'.$row['name_menu'].'</td>
                <td>'.$row['mail_order'].'</td>
                <td>'.$row['tel_order'].'</td>
                <td>'.$row['address_order'].'</td>
                <td>'.$row['number_order'].'</td>
                <td>'.$row['category'].'</td>
                <td>'.$row['price'].'</td>
                <td>'.$row['dis'].'</td>
    </tr>

          ';
 }

?>
</table>