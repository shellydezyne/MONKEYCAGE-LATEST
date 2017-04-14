<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");

if(isset($_POST['delete_image']))
{
 $row_no=$_POST['image_id'];
 mysql_query("delete from image where id='$row_no'",$conn);
 echo "success";
 exit();
}


}
?>
