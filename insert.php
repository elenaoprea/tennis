<?php include 'inc/connect.php';?>
<?php include "inc/functions.php";?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tennis</title>
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
                    <img src="img/add.png" width="100px">
                </div>
            </div>
            
            <div class="form-group">        
                <div class="col-sm-5">
                    <a href="index.php"><input class="btn btn-default" type="button" name="add" value ="Home"></a>
                    <a href="all.php"><input class="btn btn-default" type="button" name="all" value ="See All"></a>
                </div>
            </div>
            
                        
               <form class="form-group" action="#" method="POST">
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for = "first_name">First Name</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "first_name">
				        </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for = "last_name">Last Name</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "last_name">
				        </div>
				</div>
				
				
                <div class="form-group">
				    <label class="control-label col-sm-2" for = "age">Age</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "age">
				        </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for = "country">Country</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "country">
				        </div>
				</div>
				
				<div class="form-group">
				    <label class="control-label col-sm-2" for = "points">Points</label>
                        <div class="col-sm-5">
				            <input class="form-control" type = "text" name = "points">
				        </div>
				</div>
                
                 <div class="form-group">        
                      <div class="col-sm-5">
                        <button type="submit" class="btn btn-default" name="insert" value="Insert">Insert</button>
                      </div>
                 </div>
				                
            </form>
            
        </div>
       
	   <div id="message">

			<?php
			
				if(isset($_POST['insert'])){
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
								
								$query = "INSERT INTO players (first_name, last_name, age, country, points) VALUES ('{$first_name}', '{$last_name}', '{$age}', '{$country}', '{$points}')";
								if(mysqli_query($conn, $query) === TRUE){
									echo "New tennis player was succesfully added.";
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
	   
    </div>
    
    
</body>
</html>