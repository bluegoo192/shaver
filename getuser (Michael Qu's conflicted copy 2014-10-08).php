<?php
$q = intval($_GET['q']);

$con = mysql_connect("localhost","fontofyo_anon","george", "fontofyo_hashes");
if (!$con) {
  die('Could not connect: ' . mysql_error($con));
}

mysql_select_db("fontofyo_hashes");
 
//$result = mysql_query("SELECT * FROM hashes")
//or die(mysql_error());
$result = mysql_query("SELECT * FROM hashes WHERE name=d'%'");

// echo "<table border='1'>
// <tr>
// <th>Name</th>
// </tr>";

// if ($result) {
// while($row = mysql_fetch_array($result)){
//     echo "<tr>";
//     echo "<td>" . $row['name'] . "</td>"; 
//     echo "</tr>";
// }
// }

// echo "</table>";


mysql_close($con);
?>