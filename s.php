<?php
$servername = "csdatabase-instance-1.cpc72fwti9oe.us-east-2.rds.amazonaws.com";
$database = "CSDATABASE";
$username = "CSDATABASEadmin";
$password = "8ivQnwe6Tn6a3KWlCsE4m";

 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";

if($result = $conn->query('SHOW TABLES')){
  while($row = $conn->fetch_array($result)){
    $tables[] = $row[0];
  }
}

print_r($tables);

mysqli_close($conn);
?>
