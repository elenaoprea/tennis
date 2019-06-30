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


<?php

require 'connect.php';

if(isset($_GET['criteria'])){
    if(!empty($_GET['criteria'])){
        $criteria = trim($_GET['criteria']);
        $criteria = mysqli_real_escape_string($conn, $criteria);
        $query = "SELECT * FROM players WHERE first_name LIKE '%{$criteria}%' OR last_name LIKE '%{$criteria}%' OR age LIKE '%{$criteria}%' OR country LIKE '%{$criteria}%' OR points LIKE '%{$criteria}%'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows ($result)>0){
            while($row = mysqli_fetch_assoc($result)){
?>
          
        
                <div class="form-horizontal">
               
               <div class="form-group">
                        <div class="list-group-item">
				             <p><b>First name: </b><?php echo $row['first_name']; ?> </p>
				             <p><b>Last name: </b><?php echo $row['last_name']; ?> </p>
				             <p><b>Age: </b><?php echo $row['age']; ?> </p>
				             <p><b>Country: </b><?php echo $row['country']; ?> </p>
				             <p><b>Points: </b><?php echo $row['points']; ?> </p>
				        </div>
				</div>
              
           
                
            </div>
        
            <?php
            }
            echo "Number of results:". mysqli_num_rows($result);
        }else{
            echo 'No results.';
        }
    }else{
        echo 'Criteria is empty';
    }
}

?>


</body>
</html>