<?php  
//Attempt to connect to the default database server
$link = mysql_connect("csdatabase-instance-1.cpc72fwti9oe.us-east-2.rds.amazonaws.com", "CSDATABASEadmin", "8ivQnwe6Tn6a3KWlCsE4m")
or die ("Could not connect");  
//return result pointer containing list of table names
$list = mysql_list_tables ("CSDATABASE");
$i = 0;
//extract table names form the result pointer
while ($i < mysql_num_rows ($list)) {  
     $tb_names[$i] = mysql_tablename ($list, $i);
     echo $tb_names[$i] . "<BR>"; $i++;
}
?>
