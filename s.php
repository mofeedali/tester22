<?php
$servername = "csdatabase-instance-1.cpc72fwti9oe.us-east-2.rds.amazonaws.com";
$username = "CSDATABASEadmin";
$password = "8ivQnwe6Tn6a3KWlCsE4m";
$dbname = "CSDATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE id=1086";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "0" . $row[2]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?> 
