
    <div class="side"  >
        <div class="side_content" style="display: grid;grid-gap:10px 0; overflow: auto;">
        
            <div><img src="img/admin.png" alt=""></div>
            <a href="index.php" class="btn"><i class="fas fa-home"></i> خانه</a>
            <a href="#" class="btn " id="menu_side"><i class="fas fa-tags"></i> منو ها</a>
        
            <div   class="bg-white text-dark p-0" id="menus" >
                  <ul class="Menu_side"  style="display: grid;">
                      <li class="w-100"><a href="menu_list.php">لیستی از منو ها</a></li>
                      <li class="w-100"><a href="add_product.php">افزودن محصول جدید</a></li>
                      <li class="w-100"><a href="menu_grid.php">گالری </a></li>
                      <li class="w-100"><a href="category.php">بسته بندی</a></li>
                  </ul>  
            </div>
        <a href='<?php echo ($_SESSION['id']===12)?"admin.php":"member.php"; ?>' class="btn"><i class="fas fa-user-tie"></i> <?php if($_SESSION['id']===12){
             echo "اعضای گروه";
         }else{
            echo "پروفایل";
         } ?></a>
        <a href="orders.php" class="btn"><i class="fas fa-wine-glass"></i> سفارشات</a> 
        
        <form action="./PHP/logout.php" method="post" style='z-index: 100;'>
            <input type="submit" value="خروج" style="cursor: pointer;width: 100%;padding: 12px;">
        </form>
        </div>
        <div class="side_btn">
        <i style="font-size:2em;cursor:pointer" class="fas fa-list-ul"></i>
        </div>

    </div>