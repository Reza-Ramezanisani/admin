<div class="table-responsive-xl">
              <table  class="table table-dark table-borderless">
              <tr>
                           <th>نام مشتری</th>
                           <th>اسم منو</th>
                           <th>آدرس</th>
                           <th>ایمیل</th>
                           <th>تلفن </th>
                           <th>تعداد سفارش</th>
                           <th>دسته بندی</th>
                           <th>قیمت</th>
                           <th>discount</th>
                           <th>چقدر از زمان سفارش گذشته</th>

               </tr>
                       
            
<?php
require "./db.php";
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
                <td>'.$row['time'].'</td>
    </tr>

          ';
 }

?>
</table>