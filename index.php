<?php
include("config.php");
?>
<html>
<head>
<title>
Electricity Bill Payment || Home
</title>
<link rel="stylesheet" href="css/style3.css" type="text/css" />
<link rel="stylesheet" href="css/menustyle.css" type="text/css" />
</head>
<body>
<?php
include("header.php");
?>
<div class="contain">
<div class="section">
<div class="loginpad">
	<br>
	<form action="" method="post">
		<input type="text" name="CustomerId" id="txt" placeholder="Enter Your Customer ID" required>
		<br>
		<br>
		<input type="submit" name="btnlogin" id="btn" value="Enter">
	</form>
	<br>
	<br>
	<br>
	<label>Note: Your Customer Id located with your bill.<br>Namely: CON ID)</label><br>
	
	</div>
</div>
</div>
<center>
</center>
<?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$CustomerId = validate_input($_POST["CustomerId"]);
		if($CustomerId =="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM customer where CustomerId='$CustomerId'";
					$result = mysqli_query($link, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$CustomerId;
						setcookie('Username',$CustomerId,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo mysqli_error($link);
						return;
					}		
}
}
?>
</body> 
</html>