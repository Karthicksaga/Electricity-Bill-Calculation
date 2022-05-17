<?php
session_start();
include("Config.php");
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
Electricity Bill Payment || Home
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menustyle.css" type="text/css" />
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
<br>
<table border="1" width="900" id="customers">
		<tr>
		
			<th>Billno</th>
			<th>Amount</th>
			
			<th>Date</th>
			<th>Pending Payment</th>
			<th>CustomerId</th>
			<th>Username</th>
			<th>Email</th>
			<th>PhoneNumber</th>

		</tr>

			<?php
	 $query1="select billno,amount,date,payment,CustomerId,Username,Email,PhoneNumber from bill  join on customer where bill.cust_id=customer.CustomerId";
	 $result=$link->($query1);
	 
?>
	 
        
		<?php
while($rows=$result->fetch_array())
{
	?>
 <tr>
	
      <td><?php echo $rows['billno']?></td>  
	 <td><?php echo $rows['amount']?></td>  
	 <td><?php echo $rows['date']?></td>  
	 <td><?php echo $rows['payment']?></td> 
	 
    <td><?php echo $rows['CustomerId']?></td>
	 <td><?php echo $rows['Username']?></td>
	 <td><?php echo $rows['Email']?></td>
	 <td><?php echo $rows['PhoneNumber']?></td>
 
  </tr>
<?php
		}
?>
  </table>
</div>
</div>
</body> 
</html>
<?php
}
?>