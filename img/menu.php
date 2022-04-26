<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="reza/node_modules/soloalert/index.js"></script>
       <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
       <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script  src="t/tableManager.js"></script> 
   
        
    <?php include "links.php"?>

</head>
<body>
    <?php
        if(isset($_GET['err'] )){
            if($_GET['err']=="err1"){
               echo '<script>SoloAlert.alert({
                    title:"Error",
                    body:"Occure an error",
                    icon:"error",
                    useTransparency:true,
                });
            </script>';

            }
            if($_GET['err']=="noImg"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses no image</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success Update",
                        body:"Update was menu ",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';


            }
            if($_GET['err']=="largeImg"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses is bigger than 1MB</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success Update",
                        body:"Update was menu ",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';


            }
            if($_GET['err']=="noType"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses are not format image</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success Update",
                        body:"Update was menu ",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }

           
        }
        if(isset($_GET['suc'])){
            if($_GET['suc']=="yesUploadImg"){
                echo '<div class="alert alert-success w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses are image</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success Update",
                        body:"Update was menu ",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }
            if($_GET['suc']=="taken"){
                echo '<div class="alert alert-warning w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">image no change </p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success Update",
                        body:"Update was menu ",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }
            

        }
        if(isset($_GET['err2'])){
            if($_GET['err2']=="err1"){
                echo '<script>SoloAlert.alert({
                    title:"Error",
                    body:"Occure an error",
                    icon:"error",
                    useTransparency:true,
                });
            </script>';
            }
            elseif($_GET['err2']=="err2"){
                echo '<script>SoloAlert.alert({
                    title:"Error",
                    body:"Occure an error on server",
                    icon:"error",
                    useTransparency:true,
                });
            </script>';

            }
            elseif($_GET['err2']=="noImg"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses no image</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success added menu",
                        body:"",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }
            elseif($_GET['err2']=="largeImg"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses bigger than 1MB</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success added menu",
                        body:"",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }
            elseif($_GET['err2']=="noType"){
                echo '<div class="alert alert-danger w-50  alert-dismissble fixed-top ">
                <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                 <p class="text-center">File your choses no format image</p>
                    </div>';
                    echo '<script>SoloAlert.alert({
                        title:"Success added menu",
                        body:"",
                        icon:"success",
                        useTransparency:true,
                    });
                </script>';
            }
        }
        if(isset($_GET['suc2'])){
            if($_GET['suc2']=="yesUploadImg"){
                echo '<script>SoloAlert.alert({
                 title:"Success added menu",
                 body:"",
                 icon:"success",
                 useTransparency:true,
             });
         </script>';
         echo '<div class="alert alert-success w-50  alert-dismissble fixed-top ">
         <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
          <p class="text-center">File your choses yes image</p>
             </div>';

        }
           
            if($_GET['suc2']=="taken"){
                echo '<script>SoloAlert.alert({
                 title:"",
                 body:"menu already taken",
                 icon:"warning",
                 useTransparency:true,
             });
         </script>';

        }
            if($_GET['suc2']=="suc"){
                echo '<div class="alert alert-warning w-50  alert-dismissble fixed-top ">
                    <button type="button" class="btn-close " data-bs-dismiss="alert" ></button>
                    <p class="text-center">you no choses a image! </p>
                        </div>';
                echo '<script>SoloAlert.alert({
                 title:"",
                 body:"success added menu",
                 icon:"success",
                 useTransparency:true,
             });
         </script>';

        }
    }
    if(isset($_GET['del'])){
        if($_GET['del']=="yes"){
            echo '<script>SoloAlert.alert({
                title:"deleteed was menu",
                body:"",
                icon:"success",
                useTransparency:true,
            });
        </script>';
        }
    }
    
    ?>
     <!-- topnav -->
     <?php include "topnav.php";?>
                 <!-- /topnav -->
                 <!-- sidebar -->
                 <?php include "sidebar.php";?>

                 <!-- /sidebar -->
        <!-- Menu -->
        <div class="container menu ">
            <div class="row">
                <div class="header-menu">
                    <div class="row ">
                        <button  data-bs-toggle="modal" data-bs-target="#addmenu" class="btn bg-primary  text-white col-md">Add new menu</button>
                      
                       
                    </div>
                </div>
            </div>
            <hr style="border: 2px solid #000;">
        <!-- /Menu -->
        <!-- table -->
           <div class="conatiner table">
               <div class="row">
                   <div class="col-md-12">
                       <table id="myTable" class="w-100 text-center text-dark">
                          <thead >
                            <tr style='background: pink;'>
                            <th style="width:25%" class="">Image</th>
                            <th>Menu name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Type food</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                          </thead>
                          <!-- tbody -->
                          <tbody>
                              <?php
                                    include "db.php";
                                    $sql="SELECT * FROM menu NATURAL JOIN typefood ORDER BY menu_name";
                                    $result=mysqli_query($conn,$sql) OR die(mysqli_error($conn));
                                    while ($row=mysqli_fetch_array($result)) {
                                        $menu_id=$row['menu_id'];
                                        $menu_name=$row['menu_name'];
                                        $menu_desc=$row['menu_desc'];
                                        $menu_price=$row['menu_price'];
                                        $menu_pic=$row['menu_pic'];
                                        $cat=$row['type_food_name'];
                                        
                                        ?>
                                        <tr>
                                            <td> <img style="width: 100%;" src="../img/<?php  echo $menu_pic?>" alt="" srcset=""></td>
                                            <td><?php echo $menu_name?></td>
                                            <td><?php echo $menu_desc?></td>
                                            <td><?php echo $menu_price?>$</td>
                                            <td><?php echo $cat;?></td>
                                            <td><a href="#update" data-bs-target="#update<?php echo $menu_id?>" data-bs-toggle="modal"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="#delete" class="trash" data-bs-target="#delete<?php echo $menu_id?>" data-bs-toggle="modal"><i style="color: red;" class="fas fa-trash"></i></a></td>

                                        </tr>
                                        <div class="modal fade" id="update<?php echo $menu_id;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="text-center ">Update menu</h3>
                                                        <span class="btn-close btn" data-bs-dismiss="modal"></span>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="update_menu.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="id" class="form-control " value="<?php echo $menu_id;?>">
                                                            <div class="form-group">
                                                                <label for="menu">Menu name</label>
                                                                <input type="text" id="menu" name="menu" class="form-control " value="<?php echo $menu_name;?>">
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <select name="cat" class="form-control" id="">
                                                                        <?php
                                                                        include "db.php";
                                                                        $res=mysqli_query($conn,"SELECT * FROM typefood ORDER BY type_food_name");
                                                                        while ($row=mysqli_fetch_assoc($res)){
                                                                            ?>
                                                                          <option value="<?php echo $row['type_food_id'];?>"><?php echo $row['type_food_name'];?></option>
                                                                        <?php } ?>
                                                                        
                                                                        
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="desc" class="">Description</label>
                                                                <br>
                                                               <textarea name="desc" id="desc" class="form-control " cols="15" rows="10"><?php echo $menu_desc;?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="price">Menu name</label>
                                                                <input type="text" name="price" id="price" class="form-control " value="<?php echo $menu_price;?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="img">Image</label>
                                                                <input type="hidden" name="image1" id="img"  value="<?php echo $menu_pic;?>">
                                                                <input type="file" name="image" id="img" class="form-control ">
                                                            </div>
                                                            <br>
                                                            <div class="modal-footer">
                                                                <div class="form-group" style="display: flex;justify-content: center;width: 100%;">
                                                                    <input type="submit" name="update"  class="form-control bg-primary btn" >
                                                                    <input type="button" name="price"  value="Close"  class="form-control bg-danger btn-default" data-bs-dismiss="modal">
                                                                </div>
                                                            </div>

                                                         </form>

                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal fade" id="delete<?php echo $menu_id; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="background: transparent;border: 1px solid #000;">
                                                <div class="modal-header">
                                                    <h3 class="text-center text-danger">Delete menu</h3>
                                                    <span class="btn-close btn text-danger" style="cursor: pointer;" data-bs-dismiss="modal"></span>
    
                                                </div>
                                                <div class="modal-body">
                                                    <form action="delete_menu.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $menu_id;?>">
                                                        <div class="alert alert-warning">
                                                            <p>Are you want to delete the menu <?php echo $menu_name;?> ?</p>
                                                        </div>
                                                        <br>
                                                        <div class="form-group d-flex" >
                                                        <input type="submit" name='sub' class="form-control btn text-info" style="border: 1px solid red;" value="Delete">
                                                        <input type="button" class="form-control btn bg-danger" data-bs-dismiss="modal"  value="Close">
                                                        </div>
                                                    </form>
    
                                                </div>
                                            </div>
                                            </div>
                                    </div>

                                            
                                            
                                           <?php }?>

                                    </tbody>
                                    <!-- /tbody -->
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /table -->
                    <!-- addMenu -->
                    <div class="modal fade" id="addmenu">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-center">Add new menu</h3>
                                    <span class="btn-danger btn btn-close"style="font-size: 1.5em;" data-bs-dismiss="modal"></span>
                                </div>
                                <div class="modal-body">
                                    <form action="add_menu.php" enctype="multipart/form-data" method="post">
                                    
                                    <div class="form-group">
                                        <label for="menu">Menu name</label>
                                            <input type="text" id="menu" class="form-control" name="menu">
                                    </div>
                                    <br>
                                    <!-- category -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="title">Type food</label>
                                        <div class="col-lg-8"> 
                                            <select class="form-control select2" id="exampleSelect1" name="cat" required>
                                            <?php
                                                include('db.php');

                                                $result = mysqli_query($conn,"SELECT * FROM typefood ORDER BY type_food_name"); 
                                                    while ($row = mysqli_fetch_assoc($result)){

                                                    ?>
                                                    <option value="<?php echo $row['type_food_id'];?>"><?php echo $row['type_food_name'];?></option>
                                            <?php } ?>
                                            
                                            </select>
                                        </div>
                                    </div> 
                                    <!-- /category -->
                                    <div class="form-group">
                                        <label for="text">description</label>
                                        <textarea name="text"  id='text' class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="p">price</label>
                                            <input type="text" id="p" class="form-control" name="price">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="img">image</label>
                                            <input type="file" name="img" class="form-control">
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="submit" name="sub" class="form-control bg-success">
                                    </div>
                                    <div class="form-group">
                                        <input type="button" value="close" data-bs-dismiss="modal" class="form-control bg-danger">
                                    </div>
                                </form>
                                

                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /addMenu -->
                    

                   
      

                    <script>
                            $('#myTable').tablemanager({
                                
                                appendFilterby:true,
                                pagination:true,
                                firstSort:[[3,0],[2,0],[1,1]],
                                
                                showrows:[5,10,20,50],
                            
                            
                            });
                        

                        </script>
                       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
     <script src="scr.js"></script>
    

     
</body>
</html>