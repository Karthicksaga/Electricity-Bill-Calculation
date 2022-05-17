<?php 
$host='localhost';
$user='root';
$pass='';
$db='electricity';
$con=mysqli_connect($host,$user,$pass,$db);
if (!$con)
{
	die( 'connection error' .mysqli_connect_error());
	
}
else
{
	if(isset($_POST['submit']))
	{
		$CustomerId=$_POST['cus_id'];
		$Billno=$_POST['billno'];
		$Amount=$_POST['amount'];
		$Date=$_POST['date'];
		$Payment=$_POST['payment'];
		
		$sql="insert into bill (cus_id,billno,amount,date,payment) values ('$CustomerId' , '$Billno','$Amount','$Date','$Payment')";
		if(mysqli_query($con,$sql))
		{
			echo 'new record added succesfully';
			
		
		}
		else
		{
			echo "ERROR: could not execute.$sql" .mysqli_error($con);
		}
	}
}