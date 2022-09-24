<?php
include 'config/dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,300;1,600&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="styleSheets/app.css">
    <link rel="shortcut icon" href="pen in a book.png" type="image/x-icon">  
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="config/backend.php" method="post">
                <h2>REGISTER A NEW USER</h2>
                <div class="input-fields">
                    <div class="fields">
                        <input type="text" name="firstname" placeholder="First Name" required="required" autocomplete="off"> <br>
                        <input type="text" name="lastname" placeholder="Last Name" required="required" autocomplete="off"><br>
                        <input type="date" name="dob" placeholder="Dob" placeholder="Date Of Birth" required="required"><br>
                        <select name="gender" placeholder="Choose Your Gender"id="" class="gender_box" selected="OTHER">
                            <option>MALE</option>
                            <option>FAMALE</option>
                            <option>OTHER</option>
                        </select>
                    </div>
                    <div class="fields">
                        <input type="text" class="mobile-input" name="mobile" placeholder="Mobile Number" required="required" autocomplete="off"><br>
                        <input type="email" name="email" placeholder="Email" required="required"  autocomplete="off"><br>
                        <input type="password" name="password" placeholder="Password" required="required" ><br> 
                    </div>
                </div>
                <div class="add-button">
                <input type="submit" class="submit" name="add-user" value="Add User"/>
            </div>
            </form>
        </div>   
    </div> 
    
 
    
<script src="login.js"></script>
</body>
</html>