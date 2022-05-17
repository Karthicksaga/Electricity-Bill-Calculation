<?php
session_start();
include("config.php");
if(!(isset($_SESSION['log_user'])))
{
	header("location:check.php");
}
else
{	
	$user_name=$_SESSION['log_user'];
?>
<html>
<head>
<title>
Electricity Bill Payment
</title>
<meta http-equiv="refresh" content="10; url=home.php">
</head>
<body>
<center>
<h1>Meghalaya Electricity Bill Payment</h1>
<hr>
<p>
You have Cancel your paymeny<br>
Note: Do not refresh or close this page
</p>
Please wait a moment while your details is clear.
Loading...
</center>
</body>
</html>
<?php
}
?>