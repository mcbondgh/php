
<?php 
include_once 'dbconnection.php';
?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media -->
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
    <link rel="stylesheet" href="../styleSheets/update.css">
    <link rel="shortcut icon" href="pen in a book.png" type="image/x-icon">  
</head>
<body>
    <div class="container">
        <div >
            <form action="update.php" method="GET">
                <h1 >Update User</h1>
                <div class="input-fields">
                    <div class="fields">
                        <input type="text" name="firstname" placeholder="First Name" required="required" autocomplete="off" value="<?php echo $firstname; ?>"> <br>
                        <input type="text" name="lastname" placeholder="Last Name" required="required" value="<?php echo $lastname; ?>"><br>
                        <input type="date" name="dob" required="required" value="<?php echo $birthdate; ?>"><br>
                        <input type="text" name="gender" placeholder="Gender" required="required" autocomplete="off"  
                        value="<?php echo $gender; ?>"><br>
                    </div>
                    <div class="fields">
                        <input type="text" name="mobile" placeholder="Mobile Number" required="required"value="<?php echo $mobile; ?>"><br>
                        <input type="email" name="email" placeholder="Email" required="required"  autocomplete="off" value="<?php echo $email; ?>"><br>
                        <input type="password" name="password" placeholder="Password" required="required" value="<?php echo $password; ?>"><br> 
                    </div>
                </div>
                <div class="add-button">
                <a href="update.php?updateId=<?php echo $id ?>"><button type="submit" name="update" id="btn" style="background-color: red; color: #fff">Update</button></a>
                <a href="displayData.php"  class="backBtn">Back</a>
            </div>
            </form>
        </div>   
</body>
</html> 