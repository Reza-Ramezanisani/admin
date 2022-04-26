<hr>
<div class="table-responsive-md ">
   
    <table  class="table p-0  table-info ">

        <?php
         require "db.php";
         $sql='SELECT * FROM menu ';
         $res=mysqli_query($conn,$sql);
         if(mysqli_num_rows($res)){
             echo "
         <tr>
             <th style='width:500px'>عکس</th>
             <th>پاک و ویرایش</th>
             <th>نام محصول</th>
             <th>دسته بندی</th>
             <th>تعداد محصول </th>
             <th>قیمت</th>
             <th>وضعیت موجود در انبار</th>
             <th>تخفیف</th>
             <th>توضیحات</th>
             
             
         </tr>
             ";

            while($row=mysqli_fetch_assoc($res)){
                $list=array('غذای خشک','غذای آبکی','Junk food','Beverages','Vegetables');
                ?>
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
                    <td><?php echo htmlspecialchars(stripslashes($list[$row['category']])); ?></td>
                    <td><?php echo htmlspecialchars(stripslashes($row['number_menu'])); ?></td>
                    <td>هزار تومن<?php echo htmlspecialchars(stripslashes($row['price'])); ?></td>
                   
                    <td><?php if($row['status_menu']==="on"){
                        echo "موجود است";
                    }else{
                        echo "موجود نیست";
                    }  
                    ?></td>
                     
                    <td><?php 
                    if($row['dis']==="on"){
                        echo "دارد";
                    }else{
                        echo "ندارد";
                    }  
                    ?></td>
                    <td><?php 
                        echo htmlspecialchars(stripslashes($row['desc_menu']));
                     ?></td>
                  
                   
                </tr>
               
          <?php  }

         }else{
             echo "<h4 style='color: red;'>هیچ محصولی وجود ندارد</h4>";
         }
        
        ?>
    </table>
</div>
