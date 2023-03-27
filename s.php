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

$sql = 'SELECT * FROM users WHERE `id`='$_GET["name"]'';

$result = mysqli_query($conn,$sql);
if(!$result){
  die('MySQL error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_row($result)) {
    echo "- {$row[0]}\n </br>";
}
mysqli_close($conn);
?>
