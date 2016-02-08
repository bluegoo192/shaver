<?php
$q = strval($_GET['q']);

$con = mysql_connect("localhost","fontofyo_anon","george", "fontofyo_hashes");
if (!$con) {
  die('Could not connect: ' . mysql_error($con));
}

mysql_select_db("fontofyo_hashes");
 
//$result = mysql_query("SELECT * FROM hashes")


mysql_query('TRUNCATE TABLE hashes');
//$result = mysql_query("SELECT * FROM hashes")
//or die(mysql_error());

mysql_query("INSERT INTO hashes 
(hash, name) VALUES('7AB515D22BD2CF221745511AC4EE13FED15AB578', 'LeadTools OCR') ") 
or die(mysql_error()); 

mysql_query("INSERT INTO hashes
(hash, name) VALUES('37CDC66676EB82014087EE881D3ABF3EA6973C5E', 'League of Legends Patch 4.17') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes
(hash, name) VALUES('EC41E5CB44AFD8BBC5707CD765351AA9AF642D24', 'League of Legends Patch 4.16') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes
(hash, name) VALUES('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709', 'League of Legends Patch 4.15') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes
(hash, name) VALUES('D303F6049FBF1CAA552DF51075FAEE1C7DACDD4B', 'League of Legends Patch 4.14') ") 
or die(mysql_error());  

mysql_query("INSERT INTO hashes 
(hash, name) VALUES('7AB515D22BD2CF221745511AC4EE13FAD15AB867', 'Leapfrog Learning') ") 
or die(mysql_error()); 

mysql_query("INSERT INTO hashes 
(hash, name) VALUES('7AB515D12BD2CF431745511AC4EE13FED15AB578', 'Legal Document Editor') ") 
or die(mysql_error()); 

//or die(mysql_error());
$result = mysql_query("SELECT  * FROM hashes WHERE name LIKE '$q%'");

//echo "<table border='1'>
//<tr>
//<th>Name</th>
//</tr>";

if ($result) {
while($row = mysql_fetch_array($result)){
    echo "<li>";
    echo "<a onmousedown=\"verify('" . $row['hash'] . "')\" href='#'>" . $row['name'] . "</a>"; 
    echo "</li>";
}
}

//echo "</table>";


mysql_close($con);
?>