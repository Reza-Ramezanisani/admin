

<div class="table-responsive-md ">
  <table id="table_admin" style="overflow: auto;">
                          <thead >
                            <tr>
                                <th>نام بسته بندی </th>
                                <th >ویرایش</th>
                                <th>حذف</th>
                            </tr>
                          </thead>
                          <!-- tbody -->
                          <tbody>
                          <?php  include "db.php";
                              $sql="SELECT * FROM category";
                              $result=mysqli_query($conn,$sql) OR die(mysqli_error($conn));
                              
                
                              if(mysqli_num_rows($result)){
                                    


                              


                                while ($row=mysqli_fetch_array($result)) {
                                
                                $id=htmlspecialchars($row['id']);
                                $username=htmlspecialchars($row['name_cat']);
                              

                        
                          


                

                            ?>
                            <tr>
                               
                                <td><?php echo $username?></td>
                                <td>
                                   <form action="#" method="post" class="form_cat_update">
                                        <input type="text" name="name"  required/>
                                        <input type="hidden" name="id"  value="<?php echo $id; ?>"/>
                                        <input type="submit" class="sub_cat_update" value="آپدیت">
                                   </form> 
                                </td>
                                <td>
                                <form action="#" method="post" id="form_cat_del">
                                <input type="hidden" name="id"  value="<?php echo $id; ?>"/>

                                    <button class="del_cat">حذف</button>
                                   </form> 
                                </td>
                               
                                
                            
                                    
                                </tr>
                        
                                                    


                          <?php } } ?>
                         
                            
                                  
                          
                          
                          
                          
                          
                          
                          
                          
                          

                          
                    
                                        
                          
                          
                          
                          
                          
            
                                                        
                          
                          
                          
                          

                          
                          
                                           
                          
                        </tbody>
                        <!-- /tbody -->
                        
                        
                    </table>
                    
                    
                    
                                
                                
                    
                    
                </div>                                
                                
                           
                                
                                
                              
                   
                    

                    