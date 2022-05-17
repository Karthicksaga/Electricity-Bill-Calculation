<!DOCTYPE html>
<html>
<head>
<title>view Bill</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<form action="" method="POST">
<table>
<tr>
<th>NO</th>
<th>CustomerId</th>
<th>Billno</th>
<th>Amount</th>
<th>Date</th>
<th>Payment Detail</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "electricity");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["amt_id"]. "</td><td>" . $row["cus_id"] . "</td><td>" . $row["billno"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["date"]. "</td><td>" . $row["payment"]. "</td><td>" ;  
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
</body>

</html>