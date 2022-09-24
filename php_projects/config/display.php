<?php
    include_once 'dbconnection.php';


class Display {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $gender;
    private $moblieNumber;
    private $dob;


    /*********************************************************************************************************************************
                                                     SETTERS AND GETTERS FIELD 
     * ********************************************************************************************************************************
     */

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId():int { return $this->id; }

    public function setFirstName( $firstName) { $this->firstname = $firstName; }
    public function getFirstName() { return $this->firstname; }

    public function setLastName( $lastName) { $this->lastname = $lastName; }
    public function getLastName() { return $this->lastname; }

    public function setEmail( $email) { $this->email = $email; }
    public function getEmail() { return $this->email; }

    public function setGender( $gender) { $this->gender = $gender; }
    public function getGender() { return $this->gender; }

    public function setDob( $dob) { $this->dob = $dob; }
    public function getDob() { return $this->dob;}

    public function setMobileNumber( $mobileNumber) { $this->moblieNumber = $mobileNumber;}
    public function getMobileNumber() { return $this->moblieNumber;}

    public function setPassword( $password) {$this->password = $password; }
    public function getPassword() { return $this->password; }

    private array $dataset;


    /*********************************************************************************************************************************
                                                     SETTERS AND GETTERS FIELD 
    **********************************************************************************************************************************/
    function fetchData() {
        global $connection;
        $selectQuery = "SELECT * FROM add_users";
        $execute = mysqli_query($connection, $selectQuery);  
       return $execute;
     }


}//end of class;

$dataObject = new Display();





