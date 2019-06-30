<?php


include 'inc/connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])){

    $id = $_GET['id'];

    $query = "DELETE FROM players WHERE id=$id ";
        
    $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("QUERY FAILED". mysqli_error($conn));
        }else{
                echo "Record Deleted";
            } 

header("Location: all.php");

}

else{

echo "Record Does Not Exist";

}



?>