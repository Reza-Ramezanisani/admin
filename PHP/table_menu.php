<hr>
<div class="table-responsive-md ">
    <table  class="table p-0  table-info ">

        <?php
         require "db.php";
         $sql='SELECT * FROM menu INNER JOIN category ON menu.category = category.id; ';
         $res=mysqli_query($conn,$sql);
         if(mysqli_num_rows($res)){
             echo "
             <thead>
         <tr>
             <th style='width:500px'>عکس</th>
             <th>پاک و ویرایش</th>
             <th>نام محصول</th>
             <th>دسته بندی</th>
             <th>وضعیت موجود در انبار</th>
             <th>تعداد محصول </th>
             <th>قیمت</th>
             <th>تخفیف</th>
             <th>توضیحات</th>
             
             
         </tr>
         </thead>  
             ";

            while($row=mysqli_fetch_assoc($res)){
                $discount=htmlspecialchars(stripslashes($row['discount_num']));
                
                $price=htmlspecialchars(stripslashes($row['price']));
                $PRIX=$price * ($discount / 100);
                $final_prix=$price - $PRIX;
                $num= htmlspecialchars(stripslashes($row['number_menu'])); 
                if($row['dis']==="off"){
            
                    $discount=100;
                    $final_prix=$price;
                }
                ?>
   <tbody>

                <tr>
                    <td style="background-image: url('./PHP/upload_menu/<?php echo $row['img'];?>');background-repeat: no-repeat;background-size: 50%;background-position: 50% 50%;padding: 10px;">  </td>
                    <td>
                       <a style='color:gold;' href="link_up_menu.php?id=<?php echo $row['ID']; ?>" >ویرایش</a>
                        <form action="#" id='form_del' method="post">
                            <input type="hidden" name="id" value='<?php echo $row['ID']; ?>'>
                            <input type="submit" class='del' style='padding: 10px;outline: none;border: none;background:red;width: 100%;' value="پاک کردن">
                        </form>
                    </td>
                    <td><?php echo htmlspecialchars(stripslashes($row['name_menu'])); ?></td>
                    <td><?php echo htmlspecialchars(stripslashes($row['name_cat'])); ?></td>
                    <td><?php if($row['status_menu']==="on"){
                        echo "موجود است";
                    }else{
                        echo "موجود نیست";
                        $num=0;
                    }  
                    ?></td>
                    <td><?php echo $num; ?></td>
                    <td>هزار تومن<?php echo $final_prix; ?></td>
                   
                     
                    <td><?php 
                    if($row['dis']==="on"){
                        echo $discount."% دارد";
                    }else{
                        echo "ندارد";
                    }  
                    ?></td>
                    <td><?php 
                        echo htmlspecialchars(stripslashes($row['desc_menu']));
                     ?></td>
                  
                   
                </tr>
                </tbody>
               
          <?php  }

         }else{
             echo "<h4 style='color: red;'>هیچ محصولی وجود ندارد</h4>";
         }
        
        ?>
    </table>
</div>
