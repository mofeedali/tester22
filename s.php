<?php 

$user = "CSDATABASEadmin"; 
$password = "8ivQnwe6Tn6a3KWlCsE4m"; 
$host = "csdatabase-instance-1.cpc72fwti9oe.us-east-2.rds.amazonaws.com"; 

$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}



$showtables= mysql_query("SHOW TABLES FROM CSDATABASE");

while($table = mysql_fetch_array($showtables)) { // go through each row that was returned in $result
    echo($table[0] . "<br>");    // print the table that was returned on that row.
}
?>
