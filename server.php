
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$username = $_POST['username'];
$password = $_POST['password'];
require_once('config.php');
$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($link,$sql);
$check = mysqli_fetch_array($result);
if(isset($check))
{
echo 'success';
header("location:aview.html");
}
else
{
echo '<script> alert("incorrect password") </script>';
}
}

?>