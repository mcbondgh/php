<?php 
  include 'display.php';

  $result = new Display();
  $result->fetchData();
  $output = $result->fetchData();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styleSheets/tableSheet.css">

    
</head>
<body>
<div class="table-wrapper">
    <a href="../index.php"><button class="btn btn-back" >BACK</button></a> <hr stylesheet: color="gray">
            <table border="0" cellspacing="0" cellpadding="0" class="table-view">
                <thead >
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>D.O.B</th>
                    <th>GENDER</th>
                    <th>MOBILE</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>OPERATION</th>
                </thead>
                <tbody>
                    <?php 
                     while ($row = mysqli_fetch_assoc($output)) {
                        $dataObject->setId($row['id']);
                        $dataObject->setFirstName($row['firstname']);
                        $dataObject->setLastName($row['lastname']);
                        $dataObject->setGender($row['gender']);
                        $dataObject->setEmail($row['email']);
                        $dataObject->setMobileNumber($row['mobile']);
                        $dataObject->setDob($row['d.o.b']);
                    
                        echo '<tr>
                            <td>'.$dataObject->getId().'</td>
                            <td>'.$dataObject->getFirstName().'</td>
                            <td>'.$dataObject->getLastName().'</td>
                            <td>'.$dataObject->getDob().'</td>
                            <td>'.$dataObject->getGender().'</td>
                            <td>'.$dataObject->getMobileNumber().'</td>
                            <td>'.$dataObject->getEmail().'</td>
                            <td>'."🔑".'</td>
                            <td class="btn-btnDisplay">
                            <button id="update"><a href="userupdate.php?update='.$dataObject->getId().'">Update</a></button>
                             <button id="delete"><a  href="delete.php?delete='.$dataObject->getId().'">Delete</a></button>
                            </td>
                        </tr>';
                     }
                    ?>
                    
                </tbody>
            </table>
        </div>
    
</body>
<footer class="footer-column">&copy 2022 - Mc's Republic</footer>
</html>


