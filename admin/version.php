<?php
$db_server = 'localhost';
$db_username='root';
$db_password = '';
$db_name = 'monkeycage';
/* check connection */
if (mysql_connect($db_server, $db_username, $db_password)) {
  echo "Success";

  if (mysql_select_db($db_name)) {
  	echo "DB connected Success";
  }

  else
  {
  	echo "Not connected";
  }
}

/* print server version */
else
{
	echo "Connection error: ".mysql_error();
}



?>