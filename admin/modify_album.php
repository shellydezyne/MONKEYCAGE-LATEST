<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");

if(isset($_POST['delete_album']))
{
 $row_no=$_POST['album_id'];
 mysql_query("delete from album where id='$row_no'",$conn);
 echo "success";
 exit();
}


}
?>
