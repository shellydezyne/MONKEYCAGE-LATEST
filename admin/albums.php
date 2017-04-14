<?php
include("db.php");
$select = mysql_query("SELECT * FROM album",$conn);
$response=array();
while($row = mysql_fetch_array($select))
{
  $response[]=$row;
}
header('Content-Type: application/json');
echo json_encode($response);
?>
