<?php
include 'dbconnection.php';
$id = $_GET['deleteId'];
//first check if the and get the user id to be deleted from the url using the GET METHOD.
    if (isset($_GET['deleteId'])) {

        //delete query 
        $deleteQuery = "DELETE FROM add_users WHERE id ='".$id."'";
        
        //execute query
        $execute = mysqli_query($connection, $deleteQuery);

        //check if the query was executed successfully
        if ($execute) {
            header("Location: displayData.php");
        } else {
            throw new Exception(mysqli_error($connection));
        }

    }  



?>