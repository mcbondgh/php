<?php


class UpdateUser {

    public function __construct() {}

    private $userId;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $gender;
    private $dob;
    private $mobile;
    private $password_hash;

    public function setUserId($userId) {$this->userId = $userId;}
    public function getUserId() {return $this->userId;}

    public function setFirstName($first_name) {$this->first_name = $first_name;}
    public function getFirstName() {return $this->first_name;}

    public function setLastName ($last_name) {$this->last_name = $last_name;}
    public function getLastName() {return $this->last_name;}

    public function setEmail($email) {$this->email = $email;}
    public function getEmail() {return $this->email;}

    public function setPhone($phone) {$this->mobile = $phone;} 
    public function getPhone() {return $this->mobile;}

    public function setDob($dob) {$this->dob = $dob;}
    public function getDob() {return $this->dob;}

    public function setGender($gender) {$this->gender = $gender;}
    public function getGender() {return $this->gender;}

    public function setPassword($password) {$this->password = $password;}
    public function getPassword() {return $this->password;}

    public function setPasswordHash($password_hash) {$this->password_hash = $password_hash;}
    public function getPasswordHash() {return $this->password_hash;}



    //method to set the private fields.
    public function update($userId, $first_name, $last_name, $email, $gender, $password, $mobile, $dob) {
        include 'dbconnection.php';
        $this->userId = $userId;
        $this->first_name= $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->gender = $gender;
        $this->password;
        $this->mobile = $mobile;
        $this->dob = $dob;

        //Hash the password before sending to the database server for authentication
        $hashKey = password_hash($password, PASSWORD_DEFAULT);
        $this->password_hash = $hashKey;
        
        try {
            // getAll();
             //update query
        $updateQuery = "UPDATE add_users SET firstname = '".$first_name."', lastname = '".$last_name."', `d.o.b`= '".$dob."', gender ='".$gender."',  
        mobile='".$mobile."', email='".$email."', password='".$hashKey."' WHERE id = '".$userId."'";

        $execute = mysqli_query($connection, $updateQuery);

        if (!$execute) {

            die(mysqli_error($connection, $updateQuery));
        } else {
        
            Header("Location: displayData.php");
            exit;
        }
        } catch (\Exception $e) {
            echo "Error: ".$e->getMessage(); exit;

        }
    }
}






