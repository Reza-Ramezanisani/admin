<div class="modal fade" id="profile">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="position: relative;;padding: 50px;background-image: url('img/food-7.jpg');">
                    <div  class="profile"><h2 style="color:red;">پروفایل</h2></div>
                        <span class="btn-close btn-danger text-warning" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="modal-body" style="">
                    <?php
                             include "PHP/db.php";
                            $sql='SELECT * FROM bosssite WHERE id=?';
                            $stmt=mysqli_stmt_init($conn);
                            
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo "error";
                                exit();
                            }else {
                                mysqli_stmt_bind_param($stmt,"i",$_SESSION['id']);
                                mysqli_stmt_execute($stmt);
                                $result=mysqli_stmt_get_result($stmt);
                                if(mysqli_num_rows($result)!==0){
                                    $row=mysqli_fetch_assoc($result);
                                    $username=htmlspecialchars($row['username']);
                                    $mail=htmlspecialchars($row['mail']);
                                    $tel=htmlspecialchars($row['telephone']);
                                    $img=htmlspecialchars($row['img']);
                                }else{
                                    echo "این ادمین وجود ندارد";
                                    
                                }
                                
                            }
                            
                            
                            ?>
                            <div  style="width:100px;height: 100px;position: absolute;top: -50px;border: 5px solid black;padding: 5px;"><img id="img" style="border-radius: 5px;" src="./PHP/upload/<?php echo $img; ?>" alt="No image"></div>
                           
                            <div class="text"></div>
                        <form action="#" method="post" enctype='multipart/form-data' id='form_pro' class="my-5">
                            <div class="row">

                           <div class="form-group col-md">
                                <input class="form-control"  name="username" value='<?php echo $username ?>' type="text" placeholder="نام ادمین">
                            </div>
                            <br>
                            <div class="form-group col-md">
                                <input class="form-control" name="mail" value='<?php echo $mail ?>' type="email" placeholder="ایمیل">
                            </div>
                            <div class="form-group col-md">
                                <input class="form-control" name="tel" maxlength="11" value='<?php echo $tel ?>' type="tel" placeholder="تلفن">
                            </div>
                            <div class="form-group ">
                                <input class="form-control" name="id" value='<?php echo $_SESSION['id']; ?>' type="hidden" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input class="form-control" name="file"  type="file" accept='image/*' >
                            </div>
                        </div>
                        <br>
                        <input type="submit" class='form-control btn btn-sm bg-info' value="Update" id='sub'/>
                        </form>
                        <button class='btn text-info' id='del'>مقدار پیش فرض را پاک کن</button>
                       <div id="profile"></div>
                    </div>
                </div>
            </div>
        </div>