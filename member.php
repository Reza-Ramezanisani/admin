<?php  session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo $_SESSION['id'];
         if($_SESSION['id']===12){
             echo "Admin_leader";
         }else{
            echo "Admin_member";
         }
         ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   


   
   <?php include "link.php"?>
    <style>
        span{
            border: none;
            border-radius: none;
            background: transparent;
        }
       
    </style>
</head>
<?php 

        if(isset($_SESSION['id'])){
            if($_SESSION['id']===12){
                header("Location:admin.php");
            }
      
?>

<body onload="load()">

         <div class="preloader">
            <div class="spinner"></div>
        
        </div> 
         
        
        <?php include "nav.php";?>
        <?php include "nav-top.php";?>
        
    <?php include 'profile.php';?>
                    
   
        
        


            
       
    <!-- table -->
    <span class="id d-none"><?php echo $_SESSION['id']; ?></span>
    <div id="err_top" style='display: none;font-size:2em;color:red;border:1px solid red;text-align: center;'>
      
    </div>
   
          <div  class='t-res' id="tbl">

              <?php  include "PHP/table_admin.php";?> 
          </div>   
   
    
    
    
          
            
                
                   

               
               
            
   
       
        
    
       
        

       

            
                <!-- <td>
                    <button id="update" onclick="Open_modal()"  style="border: none;cursor: pointer;;outline:none;padding: 5px;background:lightblue;font-size: 1em;">Update</button>
                    <button data-bs-target="#delete" data-bs-toggle="modal"   style="border: none;cursor: pointer;;outline:none;padding: 5px;background: red;font-size: 1em;">Delete</button>
                </td> -->
                
            
    <!-- /table -->
      

   
   <!-- <button   data-bs-toggle="modal" data-bs-target="#add_admin" class="btn bg-primary mx-4">Add admin</button>
   <div id="delete" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">DELETE</h1>
                    <span class="close text-danger" style="cursor: pointer;font-size: 2rem;"  data-bs-dismiss="modal">&times;</span>
                </div>
                <div class="modal-body">
                    <h5>Are you went delete your admin?</h5>
        <form action="delete_admin.php" method="post">
            <div class="btn bg-danger">Yes</div>
            <div class="btn bg-primary">No</div>
        </form>
                </div>
            </div>
        </div>
    </div>
   <div id="add_admin" class="modal fade">
        <div class="modal-dialog modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">Add Admin</h1>
                    <span class="close text-danger" style="cursor: pointer;font-size: 2rem;"  data-bs-dismiss="modal">&times;</span>
                </div>
                <div class="modal-body ">
                    <form action="PHP/add_admin.php" method="post" id="form"  autocomplete="off">
                        <div class="form-group my-4">
                            <input type="text" class="form-control" maxlength="8" name="username" placeholder='Username' autofocus>
                            <span></span>
                        </div>
                        <div class="form-group my-4">
                            <input  type="email" class="form-control"  name="mail" placeholder='Email'>
                            <span></span>
                        </div>
                        <div class="form-group my-4">
                            <input  id="pwd" type="password" class="form-control"  minlenght="8" name="pwd"  placeholder='Password'>
                            <input  id="pwd" type="password" class="form-control my-4"  minlenght="8" name="pwd2"  placeholder='Confirm password'>
                            
                            <span></span>
                        </div>
                        <input type="submit" value="submit" name="submit" form="form"  class="submit btn bg-primary" >
                        <button id="c"  onclick="Close_modal()" type="button "  class="cancel btn bg-danger">Cancel</button>
                    </form>
                </div>
                
               
                
            </div>
                    
               
            </div>
        </div>
    </div>
    <div class="hidebtn">
        <a href="#">Message</a>
        <a href="#">Tel</a>
    </div>

    <div id="m" class="modal_update">
        <div class="cont">
            <div class="m-header">
                <h1>Update</h1>
                <div id="c" onclick="Close_modal()"  class="cancel">&times;</div>
            </div>
            <div class="m-body">
                <form action="update_admin.php" method="post" id="form1"  autocomplete="off">
                    <div class="form-group">
                        <input type="text" maxlength="8" name="username" placeholder='Username' autofocus>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <input type="email"  name="mail" placeholder='Email'>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <input type="password" minlenght="8" name="pwd" pattern="" placeholder='Password'>
                        <span></span>
                        
                    </div>
                </form>
                
                <div class="m-footer">
                    <button type="button" class="submit" form="form1">Submit</button>
                    <button id="c"  onclick="Close_modal()" type="button"  class="cancel">Cancel</button>
                </div>
            </div>
    </div> -->
       
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <?php include "linkJS.php"?>
            



            
            
</body>
<?php  
        }else{
            header("Location:login.php");
        }
?>


</html>