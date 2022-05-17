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
<link rel="stylesheet" href="css/style3.css"/>
<link rel="stylesheet" href="css/menustyle.css"/>
</head>
<body>
<?php
include("header.php");
?>
<div class="container">
<?php
include("menu.php");
?>
<div class="bd">
<center>
<form action="" method="post">
<input type="submit" name="btn_update" value="Pay Now" id="btn"/>
</form>
</div></div>
<center>
</center>
</body>
</html>
<?php
if(isset($_POST['btn_update']))
{
	header("location:process.php");
}
}
?>