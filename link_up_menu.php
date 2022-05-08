<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
    $(document).ready(function () {
        $('#up').click(function (event) {
      let a=$('#up').parent();
      event.preventDefault();
      let form = new FormData(a[0]);
      $.ajax({
         type:"POST",
         url:"PHP/up_menu_list.php",
         data:form,
         cashe:false,
         contentType:false,
         processData:false,
         success:function (data) {
            $(".alert").slideDown(400).append("<div></div>").css('fontSize','1.5em').html(data).css({
                'position':'fixed',
                'top':0,
                'left':0,
                'background':'green',
                'width':'100%',
                'textAlign':'center',
                'padding':'12px'
            });
         },
         error:function (data) {
            $(".alert").before("<div></div>").html(data);
         }


      });
     
      
   });
});
    </script>
        <style>
            form{

                 display: grid;
                 grid-template-columns: auto auto auto;
                 grid-gap:20px 10px;
                 padding: 10px;
            }
            input[type='submit'],img{
                grid-column:1/4;
                
            }
            img{
                width: 100%;
                grid-row: 1/2;
                height:30vw;
                object-fit:contain;
                border: 1px solid lightblue;
                border-radius: 50px;
            }
            input:not(input[type='submit']){
                padding: 12px;
                border: none;
                border-bottom: 1px inset lightblue;
                font-family:verdana serif;
                outline:none
            }
            textarea{
                grid-column: 1/4;
            }
            @media screen and (max-width:800px){
                form{
                    grid-template-columns: auto ;
                }
                input[type='submit'],img{
                    grid-column: 1/2;
                }
                textarea{
                    grid-column:1/2 ;
                }
            }
           
            .file{
                border: 1px solid #000;
                border-radius: 12px;
                padding: 10px;
                background: purple;
                color: white;
                font-size: 1em;
            }
        
            
        </style>
    <head>
<body>
    <div class='alert' style='display: none;overflow:auto'></div>
   <?php require "./PHP/db.php";
         $sql="SELECT * FROM menu INNER JOIN category ON menu.category = category.id WHERE menu.ID=?";
         $stmt=mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql)){
             echo "خطا";
             exit();
         }else{
             mysqli_stmt_bind_param($stmt,"i",$_GET['id']);
             mysqli_stmt_execute($stmt);
             $res=mysqli_stmt_get_result($stmt);
         }
         if(mysqli_num_rows($res)){
          while($row=mysqli_fetch_assoc($res)){
              
        ?>
    <form action="#" id='form_up'  method="post" enctype='multipart/form-data'>
        <img  src='./PHP/upload_menu/<?php echo $row['img']; ?>'>
            <div>
                 <label for="img" class='file' style='cursor: pointer;'>عکس محصول</label>
                <input type="file" onchange='File(this)' name="img" id='img' accept='image/*' hidden>
                <span id='text'>نام عکس</span>
            </div>
        <input type="hidden" name="id" value='<?php echo $_GET['id']; ?>' hidden>
        <div>
                <label for="a">نام محصول :</label>
            <input type="text" name="name" id='a' value='<?php echo $row['name_menu']; ?>' autofocus>
        </div>
        <select type="text" name="cat" >
        <?php
                    require "PHP/db.php";
                    $sql = "SELECT * FROM category";
                    $query = mysqli_query($conn,$sql);
                    while ($re=mysqli_fetch_assoc($query)) {?>
                       <option value="<?php echo $re['id']; ?>" <?php if($re['id'] == $row['id']){ echo "selected";}  ?>><?php echo $re['name_cat']; ?></option>
                        
                   <?php }?>
        </select>
        <div>
        <label for="b">تعداد محصول :</label>
            <input type="number" id='b' name="no" value='<?php echo $row['number_menu']; ?>'>
        </div>
        <div>
            <label for="c">قیمت :</label>
            <input type="number" min="1" name="price" id='c' value='<?php echo $row['price']; ?>'>
        </div>
        
        <div>
            <label for="s">وضعیت موجود در انبار :
                        
            </label>
            <input type="checkbox" id='s' name="status" <?php if($row['status_menu']==="on"){echo 'checked';}?>>
            <input type="checkbox" id='v' class="DIS" name="dis" <?php if($row['dis']==="on"){echo 'checked';}?> >
            <label for="v" class='s'>
            تخفیف :
                     </label>
            <div class="form-group col-md" id='DISCOUNT'   >
                    <input type="number" max="99" style="width: 50%" min="1" name="discount_num" placeholder="چند درصد تخفیف" />
                </div>
        </div>
        <textarea name="desc"  placeholder="توضیحات" id="" cols="10" rows="10" maxlength='120'  style='color: black;' dir='rtl'><?php echo $row['desc_menu'];?></textarea>

        <input type="submit" id='up' style='padding: 10px;cursor: pointer;border: none;;outline: none;color: lightblue;font-size: 2em;;background:white;' value="ویرایش">
    </form>
    <?php }
        }?>
        <script>
            
            function File(x){
                 let text= document.getElementById('text');
                 text.innerHTML=x.files[0].name;
            }

            
        </script>
</body>
</html>