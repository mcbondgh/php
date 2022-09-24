<?php
include_once 'dbconnection.php';

//User alert message.
$userPrompt = '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

//check if the submit button was clicked. If yes, then collect all userdata from the form.
if (isset($_POST['add-user'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email']; 
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];

    //Hash the password before sending to the database server for authentication
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    //insert query to insert the collected database.
    $insertQuery= "INSERT INTO add_users VALUES (DEFAULT, '$first_name', '$last_name', '$dob', '$gender', '$mobile', '$email', '$hashPassword', DEFAULT)";
    
    //execute the query
    $execute = mysqli_query($connection, $insertQuery);

    //check if the insert statement succeeded and return true.
    if($execute) {
        header("Location:displayData.php");
    
    } else {
        throw new Exception("Could not insert add_users statement");
    }
    
}





?>