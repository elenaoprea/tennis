    <?php include("inc/connect.php"); ?> 
    <?php include("inc/getResults.php"); ?> 
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>See All</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="jumbotron text-center">
        
        <div class="form-horizontal">
            
            <div class="form-group">        
                <div class="col-sm-5">
                    <img src="img/add.png" width="170px"><br/>
                </div>
            </div>
            
            
            <div class="form-group">        
                <div class="col-sm-5">
                    <a href="index.php"><input class="btn btn-default" type="button" name="add" value ="Home"></a>
                    <a href="all.php"><input class="btn btn-default" type="button" name="all" value ="See All"></a>
                </div>
            </div>

            <?php
            
           
                if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $query = "SELECT * FROM players WHERE id=$id";  
                    $result = mysqli_query($conn, $query);
                        if(!$result){
                            die('QUERY FAILED'. mysqli_error());
                        }     
                   
                        while($row = mysqli_fetch_array($result)){
                                $id = $row['id'];  
				                $first_name =  $row['first_name']; 
								$last_name = $row['last_name'];
                                $age = $row['age'];
                                $country = $row['country'];
                                $points = $row['points'];
                    }
                }
            ?>

            <form class="form-group" action="#" method="POST">

              
               <div class="form-group">
                    <label class="control-label col-sm-2" for = "first_name">First Name</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "first_name" value="<?php echo $first_name; ?>">
				        </div>
				</div>
                
                 <div class="form-group">
				    <label class="control-label col-sm-2" for = "last_name" >Last Name</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "last_name" value="<?php echo $last_name; ?>">
				        </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for = "age">Age</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "age" value="<?php echo $age; ?>">
				        </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for = "country">Country</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "country" value="<?php echo $country; ?>">
				        </div>
				</div>
               
               <div class="form-group">
				    <label class="control-label col-sm-2" for = "points">Points</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "points" value="<?php echo $points; ?>">
				        </div>
				</div>
                
               <div class="form-group">        
                      <div class="col-sm-5">
                        <button type="submit" class="btn btn-default" name="update" value="Update">Update</button>
                      </div>
                 </div>
                            
                


            </form>
 
       </div>
   
  
    <?php

       
       
        if (isset($_POST['update'])){
                if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age']) && isset($_POST['country']) && isset($_POST['points'])){
                            if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['age']) && !empty($_POST['country']) && !empty($_POST['points'])){  

        
                                $first_name = trim($_POST['first_name']);
								$last_name = trim($_POST['last_name']);
                                $age = trim($_POST['age']);
                                $country = trim($_POST['country']);
                                $points = trim($_POST['points']);
								require 'inc/connect.php';
								$first_name = mysqli_real_escape_string ($conn, $first_name);
								$last_name = mysqli_real_escape_string ($conn, $last_name);
								
                                $age = mysqli_real_escape_string ($conn, $age);
                                $country = mysqli_real_escape_string ($conn, $country);
                                $points = mysqli_real_escape_string ($conn, $points);



            $query = ("UPDATE players SET first_name='$first_name', last_name='$last_name',  age=$age, country='$country', points=$points WHERE id=$id");

                if(mysqli_query($conn, $query) === TRUE){
                                    header("Location: all.php");   
								}else{
									echo "Error!";
								}
							}else {
								echo "All must be filled in.";
							}
							
						}else{
							echo "All parameters must be sent!";
						}
				}
       
       
			?>
    
       
     </div>   
    
</body>
</html>