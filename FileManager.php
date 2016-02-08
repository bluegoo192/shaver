// This script will parse each file to a string, organize them into a queue, and
// pass them to Sha1Hasher.js.
// It will store each individual hash, then combine the complete list of hashes
// and sort it into an array, in alphabetical order
// CORRECTION:  create a csv file with all the stuff

<?php
$q = strval($_GET['q']);

function getLegitHash($name) {
    $con = mysql_connect("localhost","fontofyo_anon","george", "fontofyo_hashes");
    if (!$con) {
        die('Could not connect: ' . mysql_error($con));
    }
    mysql_select_db("fontofyo_hashes");
    $result = mysql_query("SELECT  * FROM hashes WHERE name='$name'");
    if ($result) {
        return mysql_fetch_array($result)['hash'];
    }
}

?>