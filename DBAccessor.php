<?php

$username="fontofyo_anon";
$password="ff@20";
$database="fontofyo_hashes";

mysql_connect(localhost,$username,$password) or die(mysql_error());;
echo "Connected.";
@mysql_select_db($database) or die( "Unable to select database");
echo "Database selected.";

mysql_query("CREATE TABLE hashes(
id INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
 hash VARCHAR(40), name VARCHAR(30))")
 or die(mysql_error());  

echo "Table Created!";

mysql_query("INSERT INTO hashes
(hash, name) VALUES('3da541559918a808c2402bba5012f6c60b27661c', 'asdf') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes
(hash, name) VALUES('f1b699cc9af3eeb98e5de244ca7802ae38e77bae', 'asdfg') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes 
(hash, name) VALUES('7ab515d12bd2cf431745511ac4ee13fed15ab578', 'asdfgh') ") 
or die(mysql_error());  

echo "Data Inserted!";

$sql="SELECT ID, name FROM hashes WHERE  name LIKE '%" . $name . "%'"; 

$result=mysql_query($sql); 

$row = mysql_fetch_array( $result );

echo "Hash: ".$row['hash'];
echo " Name: ".$row['name'];

?>
