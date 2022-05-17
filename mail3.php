<?php 
 include "config.php";
 
  $sql = "SELECT customer.email,bill.billno,bill.amount,bill.date FROM customer join bill on Customer.customerId=bill.cus_id" ;
	$res =mysqli_query($link,$sql);
	if(mysqli_num_rows($res) > 0)
	while( $row =mysqli_fetch_assoc($res))
	{
	
	 $a = $row['email']. ", "; 
	$b = $row['billno']. ", ";
	 $c = $row['amount']. ", ";
	  $d = $row['date']. ", ";

			
	
	$email = $a;
	$billno =$b;
	$amount= $c;
	$date=$d;
	
	
	$totalEmails = count($email);
	
	
	for ($i=0; $i<$totalEmails; $i++) {
   $email[$i]  = trim($email[$i]);
   $billno[$i]  = trim($billno[$i]);
   $amount[$i] = trim($amount[$i]);
   $date[$i]  =  trim($date[$i]);
	
   }
 
	$to = $email;
	$Billno =$b;
	$Amount= $c;
	$Date=$d;
	echo $to; 
	echo $Billno; 
	echo $Amount; 
	echo $Date; 
    echo "<br>";
	$subject = 'Email Billing Status';
    $message = "<html>
    <body><p>Name: '$to'</p><br>
	      <p>BillNo: '$Billno'</p><br>
		  <p>Amount: '$Amount'</p> <br>
		  <p>Date  : '$Date'</p>
	 
	
	
	</body></html>";
	
    $header  =  "From:karthicktj3@gmail.com" . "\r\n" .
    "CC: "."\r\n". "MIME-Version: 1.0". "\r\n" . "Content-type:text/html;charset=UTF-8";
    if(mail($to, $subject, $message, $header))
    {
        echo "sended";
    }
    else
    {
        echo "error_message";
    }
}
?>