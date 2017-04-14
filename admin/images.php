<?php
include("db.php");

$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["album_id"]))
			{
				$album_id=intval($_GET["album_id"]);
        $select_query = "SELECT * FROM image WHERE album_id=".$album_id;
        $select = mysql_query($select_query,$conn);
        $response=array();
        while($row = mysql_fetch_array($select))
        {
          $response[]=$row;
        }
        header('Content-Type: application/json');
        echo json_encode($response);
			}
			break;
      default:
      			// Invalid Request Method
      			header("HTTP/1.0 405 Method Not Allowed");
      			break;
  }
  ?>
