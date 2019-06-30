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
                    <img src="img/search.png" width="100px">
                </div>
            </div>
            
            <div class="form-group">        
                <div class="col-sm-5">
                    <a href="insert.php"><input class="btn btn-default" type="button" name="add" value ="Add Tennis Player"></a>
                    <a href="all.php"><input class="btn btn-default" type="button" name="all" value ="See All"></a>
                </div>
            </div>
            
            
            <form class="form-group" action="#" method="GET">
                <div class="col-sm-5">
                        <input class="input-group-text purple lighten-3" type="text" name="criteria" placeholder="Type your criteria here...">
                        <input class="btn btn-default" type="submit" value="Search"><br/>
                </div>   
            
                
            </form>
            
        </div>
     
         <?php
        
        include 'inc/getResults.php';
        
        ?>
		
    </div>
    
    
</body>
</html>