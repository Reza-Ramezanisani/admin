<div class="table-responsive-xl">
              <table  class="table text-white  table-borderless">
             <thead>
                 <tr>
                              <th class="text-center">نام مشتری</th>
                              <th class="text-center">محصولات سفارش شده</th>
                              <th class="text-center">تلفن </th>
                              <th class="text-center">(هزار تومن) قیمت</th>
                              <th class="text-center">آدرس</th>
                              <th class="text-center">چقدر از زمان سفارش گذشته</th>
                              <th class="text-center">نحوی پرداخت</th>
   
                  </tr>

             </thead>
             <tbody>
                       
           
<?php
require "db.php";
$sql = 'SELECT * FROM order_menu ORDER BY id DESC';
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    $Time_now=time();
    $time_sub= $Time_now - $row['time_order'];
    if($row['pardaght_no_yes'] === "yes"){
        $pardaght_a="<p   style='color: white;background:rgb(66, 228, 17);padding: 5px;border-radius:10px;width:auto;cursor: pointer;height: auto;'>پرداخت شده است</p>";
    }else{
        
        $pardaght_a="<p id='".$row['id']."' class='pardaght' style='color: white;background:rgb(87, 5, 5);;padding: 5px;border-radius:10px;width:auto;cursor: pointer;height: auto;'>پرداخت نشده است</p>";
    }
    // if($time_sub > 10){
    //     echo "<spna class='alarm'>Alarm</span>";
    // }
   

    if ($time_sub > 3600) {
        $time_sub = "ساعت پیش".round($time_sub  / 3600);
        $color="rgb(248, 99, 99);";
        
    }elseif($time_sub > 60){
        $time_sub = "دقیقه پیش".round($time_sub  / 60);
        $color="rgb(239, 149, 13)";

    }else{
        $time_sub = "لحضاتی پیش";
        $color="rgb(32, 32, 32)";

    }
   $data_josn=$row['name_order'];
   $carts = json_decode($data_josn, true);
   $name_order_arr=array();
   $qty_order_arr=array();
   $price_order_arr=array();
//    print_r($carts);
    // foreach ($carts as $key => $value) {
    //     echo $carts[$key];
    // }
   // print_r($carts);
//    $count=COUNT()
  foreach ($carts as $key => $value) {

      array_push($name_order_arr,$value['name']);
      
  }
  foreach ($carts as $key => $value) {

      array_push($qty_order_arr,$value['qty']);
      
  }
  foreach ($carts as $key => $value) {

      array_push($price_order_arr,$value['price']);
      
  }
//   print_r($qty_order_arr);
//   echo "</br>";
//   print_r($name_order_arr);
//   echo "</br>";
//   print_r($price_order_arr);
  $total_price=0;
  $total_qty=0;
  $total_name="";
  foreach ($price_order_arr as $key => $value) {
      $total_price+=$value;

  }
//   foreach ($qty_order_arr as $key => $value) {
//       $total_qty+=$value;

//   }
  $i1=0;
  for ($i=0; $i < COUNT($name_order_arr); $i++) { 
     for (; $i1 < COUNT($qty_order_arr);) { 
       $total_name.="<div style='display: flex;align-items: center;justify-content: center;margin: 3px;'><span style='background: rgb(13, 126, 239);width: auto;;color: white;padding: 5px;border-radius:10px'>".$name_order_arr[$i]."</span>"."<span style='background:rgb(239, 13, 84);width: auto;;color: white;padding: 5px;border-radius:10px'>".$qty_order_arr[$i1]."</span></div>";
       $i1++;
        break;
         
     }
  }
  foreach ($name_order_arr as $key => $value) {
      foreach ($qty_order_arr as $key2 => $value2) {
      }
  }
  $pardaght="";
if($row['pardaght'] === "pool"){
    $pardaght.="<div id='par'><p style='color: red;background: pink;;padding: 5px;border-radius:10px;width:autoheight: auto;'> نقدی </p>".$pardaght_a."<p  id='".$row['id']."' class='cancel' style='color:black;background:rgb(199, 195, 235);;padding: 5px;border-radius:10px;width:auto;cursor: pointer;height: auto;' >کنسل کن</p></div>";
}elseif ($row['pardaght'] === "electro") {
    $pardaght.="<span></span><span>نقدی</span><span>نقدی</span>";
   
}
     


echo ' 
            
    <tr style="background:'.$color.';">

                <td>'.$row['fname'].'</td>
                <td>'.$total_name.'</td>
                <td>'.$row['tel_order'].'</td>
                <td>'.$total_price.'</td>
                <td>'.$row['address_order'].'</td>
                <td>'.$time_sub.'</td>
                <td>'.$pardaght.'</td>
                
    </tr>

          ';
 }

?>
</tbody>
</table>