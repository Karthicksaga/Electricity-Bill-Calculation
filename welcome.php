<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginadmin.html");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="admin.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;
background-image:("trasparent.jpg")	;	}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Electricity management.</h1>
    </div>
        <div class=button>
		<ul>
       <li> <a href="reset.php">Reset Your Password</a> </li>
       <li><a href="logout1.php">Sign Out of Your Account</a></li>
		
	<li>	<a href="registration.html">New connection</a> </li>
	<li>	<a href="view.php">View connections</a> </li>
		
	<li>	<a href="ebbill.php">Enter into calculation page</a> </li>
	<li><a href="index.php">Bill Payment</a> </li>
		</ul>
        </div>
</body>
</html>