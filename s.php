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

$sqlriz = "Select * FROM `CSDATABASE`";


    $Rslt = mysqli_query($conn,$sqlriz);

    while($r=mysqli_fetch_object($Rslt))
    {
        $res[]=$r;
    }

print_r($res);

mysqli_close($conn);
?>
