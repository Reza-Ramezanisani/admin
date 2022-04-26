

<div class="conatiner table">
               <div class="row">
                   <div class="col-md-12">
                       <table id="table_admin" class="">
                          <thead >
                            <tr>
                                <th>نام </th>
    
                                <th>ایمیل</th>
                                <th>شماره موبایل</th>
                                <th >ویرایش</th>
                            </tr>
                          </thead>
                          <!-- tbody -->
                          <tbody>
                          <?php  include "db.php";
                              $sql="SELECT * FROM bosssite WHERE id={$_SESSION['id']}";
                              $result=mysqli_query($conn,$sql) OR die(mysqli_error($conn));
                              
                
                              if(mysqli_num_rows($result)){
                                    


                              


                                while ($row=mysqli_fetch_array($result)) {
                                
                                $id=htmlspecialchars($row['id']);
                                $username=htmlspecialchars($row['username']);
                                $mail=htmlspecialchars($row['mail']);
                                $tel=htmlspecialchars($row['telephone']);


                        
                          


                

                            ?>
                            <tr>
                               
                                <td><?php echo $username?></td>
                                
                                <td><?php echo $mail;?></td>
                                <td><?php echo $tel;?></td>
                                <td>
                                    <a class='btn text-dark' href="PHP/update_table_admin.php?id=<?php echo $id;?>">ویرایش</a>
                                    
                                </td>
                               
                                
                            
                                    
                                </tr>
                        
                                                    


                          <?php } ?>
                         
                            
                                  
                                             
                                            
                           
                      
                                         
                                         

                                        
                                      
                                         

                                         
                    
                                        

                                        
                                        
                                                        
                                                           
            
                                                        
                                                   
                                            
                                        
                                   

                                            
                                            
                                           

                                    </tbody>
                                    <!-- /tbody -->
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                        
             <?php

         
         

}else{
    header("Location:../login.php");
}
             
             
             
             ?>                 
                                
                                
                           
                                
                                
                           
                                
                                
                              
                   
                    

                    