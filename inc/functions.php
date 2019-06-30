<?php

    include 'connect.php';

    function showAllData(){
        global $conn;
        $query = "SELECT * FROM players";  
        $result = mysqli_query($conn, $query);
        if(!$result){
            die('QUERY FAILED'. mysqli_error());
        }
    }


$query = "SELECT * FROM players";
$result = mysqli_query ($conn, $query);

?>