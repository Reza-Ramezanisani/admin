      
        <h2 style='text-align: center;'>داشبورد</h1>
        <i  class="fas fa-align-right" onclick="slide_bar()" style="float: right;margin-top: 0;cursor: pointer;z-index: 1;"></i>
        <div class="popup">
            <i style="cursor: pointer;" onclick="location.href='inbox.php'" class="fas fa-envelope"></i>
            <i onclick="open_user()"  style="cursor: pointer;" class="fas fa-user"></i>
        </div>
        <div class="modal_tiny_popup" >
            <span onclick="open_user()" style="font-size:25px;color:red;cursor: pointer;">&times;</span>
            <h5 dir="rtl">خوش آمدید</h5>
            
             <div class="modal_tiny_popup_header">
             <a href="#profile" data-bs-toggle="modal"><i class="far fa-user-circle"></i> پروفایل</a>
             <a href="inbox.php"><i class="far fa-envelope"></i> جعبه پیام ها</a>
             
             <hr>
             <form action="./PHP/logout.php" method="post" style='z-index: 100;'>
                <input type="submit" value="خروج" style="cursor: pointer;width: 100%;padding: 12px;background:black;color:red;border: none;">
            </form>
             </div>
        </div>
