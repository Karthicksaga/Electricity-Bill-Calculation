<?php
$servername="localhost";
$username="root";
$password="";
$database="electricity";

$con=new mysqli($servername,$username,$password,$database);
if($con->connect_error)
{
	die("Connection failed:" .$con->connect_error);
}
else
{

$sql="select bill.billno,bill.amount,bill.date,bill.payment from bill join  customer on bill.cus_id=customer.CustomerId;";
$result=$con->query($sql);	
if($result->num_rows>0)
{
	
 while($row=$result->fetch_assoc())
 {
      echo "BillNo:" .$row["billno"]. "Amount:" .$row["amount"]. "Date:" .$row["date"].  "payment:" .$row["payment"]."<br>" ; 
   
  }
}
else
{
	echo "Error connecting" .$con->error;
}

}


?>
