<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
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
<form action="Registration.html" method="POST">
<table>
<tr>
<th>Name</th>
<th>CustomerId</th>
<th>Username</th>
<th>Area</th>
<th>State</th>
<th>District</th>
<th>Ward</th>
<th>ConnectionType</th>
<th>Email</th>
<th>PhoneNumber</th>
<th></th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "electricity");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  Name, CustomerId,  Username, Address, Area,State, District, Ward, ConnectionType,Email,PhoneNumber FROM customer where ConnectionType='Domestic'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["CustomerId"] . "</td><td>" . $row["Username"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Area"]. "</td><td>" . $row["District"]. "</td><td>" . $row["Ward"]. "</td><td>" . $row["ConnectionType"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["PhoneNumber"]. "</td></tr>";  
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
</body>

</html>