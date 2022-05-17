<?php
$Name = $_POST['Name'];
$CustomerId = $_POST['CustomerId'];
$Username= $_POST['Username'];
$Address = $_POST['Address'];
$Area = $_POST['Area'];

$State= $_POST['State'];
$District = $_POST['District'];
$Ward = $_POST['Ward'];
$ConnectionType = $_POST['ConnectionType'];
$Email = $_POST['Email'];

$PhoneNumber = $_POST['PhoneNumber'];

if (!empty($Name) || !empty($CustomerId) ||  !empty($Username) || !empty($Address) || !empty($Area) ||  !empty($State)||  !empty($District)||  !empty($Ward)||  !empty($ConnectionType)|| !empty($Email) || !empty($PhoneNumber)) 
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "electricity";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Email From Customer Where Email = ? Limit 1";
     $INSERT = "INSERT Into Customer (Name, CustomerId ,Username, Address, Area, State, District, Ward, ConnectionType, Email,PhoneNumber) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $Email);
     $stmt->execute();
     $stmt->bind_result($Email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sissssssssi", $Name, $CustomerId,  $Username, $Address, $Area, $State, $District, $Ward, $ConnectionType, $Email, $PhoneNumber);
      $stmt->execute();
      echo "register successfully";
	   header("location:welcome.php");
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else 
{
 echo "All field are required";
 die();
}
?>