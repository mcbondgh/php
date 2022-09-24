<?php
//Database constant variables
$serverName = '127.0.0.1';
$dbName = 'crud_project';
$dbPassword = '';
$dbUserName = 'root';

//check if the database connection was established
$connection = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);
if (!$connection) {
    die("Could not connections to database " . $serverName . ".");
}
// else{
//     echo 'Database connection established successfully';
// }









?>