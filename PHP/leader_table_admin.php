



<div class="conatiner table">



               <div class="row">
                   <div class="col-md-12">
                       <table id="table_admin" class="">
                          <thead >
                            <tr>
                            <th>شماره ردیف</th>
                            <th>نام </th>
   
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                            <th >ویرایش</th>
                            <th>حذف</th>
                            </tr>
                          </thead>
                          <!-- tbody -->
                          <tbody>
                          <?php  include "db.php";
                              $sql="SELECT * FROM bosssite";
                              $result=mysqli_query($conn,$sql) OR die(mysqli_error($conn));
                              $no=1;
                           


                                while ($row=mysqli_fetch_array($result)) {
                                
                                $id=htmlspecialchars($row['id']);
                                $username=htmlspecialchars($row['username']);
                                $mail=htmlspecialchars($row['mail']);
                                $tel=htmlspecialchars($row['telephone']);


                        
                          


                

                            ?>
                            <tr>
                                <td>
                                    <?php 
                                        echo $no++;
                                    ?>
                                </td>
                                <td><?php echo $username?></td>
                                
                                <td><?php echo $mail;?></td>
                                <td><?php echo $tel;?></td>
                                <td>
                                    <a class='btn text-dark' href="PHP/update_table_admin.php?id=<?php echo $id;?>">ویرایش</a>
                                    
                                </td>
                                <td>
                                <form action="#" id="id<?php echo $id;?>" method="post">
                                    <input type="hidden" name="id"  value="<?php echo $id;?>">
                                    <input class="sub id<?php echo $id;?> text-danger btn"  type="submit" value="Delete" >
                                </form>
                                </td>
                                
                            
                                    
                                </tr>
                        
                                                    


                          <?php } ?>
                         
                            
                                  
                                             
                                            
                           
                      
                                         
                                         

                                        
                                      
                                         

                                         
                    
                                        

                                        
                                        
                                                        
                                                           
            
                                                        
                                                   
                                            
                                        
                                   

                                            
                                            
                                           

                                    </tbody>
                                    <!-- /tbody -->
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                       
                                
                                
                           
                                
                                
                           
                                
                                
                              
                   
                    

                    