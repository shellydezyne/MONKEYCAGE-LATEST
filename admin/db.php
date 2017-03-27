<?php
//$servername = "rdbms.strato.de";
$servername = "localhost";
//$username = "U2700106";
$username = "U2924911";
$password = "monkeycage098";





$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
//$db_selected = mysql_select_db('DB2700106', $conn);
$db_selected = mysql_select_db('DB2924911', $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
