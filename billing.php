<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) 
		 {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db='electricity';
            $conn = mysqli_connect($host, $user, $pass,$db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            $CustomerId = $_POST['cus_id'];
			$Billno=$_POST['billno'];
            $Amount = $_POST['amount'];
			$Date = $_POST['date'];
			$Payment = $_POST['payment'];
            $sql = 'UPDATE bill '. 'SET billno=$Billno'. 'SET amount = $Amount '. 'SET date = $Date ' .'SET payment = $Payment ' .'WHERE cus_id = $CustomerId ';
            $result = mysqli_query($conn, $sql);
            
            if(!$result) 
			{
               die('Could not update data: ' .mysqli_error($conn));
            }
            echo "Updated data successfully\n";
            
            mysqli_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">CustomerID</td>
                        <td><input name = "cus_id" type = "text" id="cus_id"
                         ></td>
                     </tr>
					  <tr>
                        <td width = "100">Billno</td>
                        <td><input name = "billno" type = "text" id="billno"
                         ></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Amount</td>
                        <td><input name = "amount" type = "text" id="amount"
                           ></td>
                     </tr>
					 
					 <tr>
                        <td width = "100">Date</td>
                        <td><input name = "date" type = "text"  id="date"
                           ></td>
                     </tr>
					 <tr>
                        <td width = "100">Payment</td>
                        <td><input name = "payment" type = "text" id="payment" 
                           ></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>