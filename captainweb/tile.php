 <?php   
   include('dbconnection.php');
 session_start();
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Tile view</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="left">Brand Details</h3><br />  
                <?php  

                    
                $query = "SELECT * FROM brands ORDER BY id ASC";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               
                               <img src="admin/profilepics/<?php  echo $row['BrandLogo'];?>" width="80" height="80">
                               <h4><?php echo $row["BrandName"]; ?></h4>  
                               <h4 ><?php echo $row["BrandUrl"]; ?></h4>
                               <a href="<?php echo $row["BrandUrl"]; ?>"  class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left"> Visit Site </a>
                               
                          </div>  
                     </form> 
                     <br> 
                </div> 
                  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                
                
           </div>  
          
      </body>  
 </html>
   