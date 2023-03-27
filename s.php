<?php



$dbname = 'CSDATABASE';

if (!mysql_connect('csdatabase-instance-1.cpc72fwti9oe.us-east-2.rds.amazonaws.com', 'CSDATABASEadmin', '8ivQnwe6Tn6a3KWlCsE4m')) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

mysql_free_result($result);
?>

