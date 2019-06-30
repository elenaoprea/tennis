<?php include 'inc/connect.php';?>
<?php include "inc/functions.php";?>

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
                    <img src="img/add.png" width="100px">
                </div>
            </div>
            
        <div class="form-group">        
                <div class="col-sm-5">
                    <a href="index.php"><input class="btn btn-default" type="button" name="add" value ="Home"></a>
                    <a href="all.php"><input class="btn btn-default" type="button" name="all" value ="See All"></a>
                </div>
            </div>
         
            

        </div>

    <?php

    showAllData();

    ?>

       <div class="container">
          <h2>All players</h2>         
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
              </tr>
            </thead>
            <tbody>
    
    <?php

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['last_name'] . '</td>';
            echo '<td><a class="btn btn-default" href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
            echo '<td><a class="btn btn-default" href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
            echo "</tr>";
        }

                     
        echo "</table>";

    ?>
    
            </tbody>
          </table>
        </div>     


    <div class="col-sm-5">
            <a class="btn btn-default" href="insert.php">Add a new player</a>
    </div>   


     </div>   
    
</body>
</html>

