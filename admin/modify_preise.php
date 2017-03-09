<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");
$select_table = "SELECT * FROM preise";
$run_query= mysql_query( $select_table, $conn);

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $description=$_POST['description_val'];
 $normalhour=$_POST['normalhour_val'];
 $happyhour=$_POST['happyhour_val'];

 mysql_query("update preise set description='$description',normalhour='$normalhour',happyhour='$happyhour' where id='$row'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from preise where id='$row_no'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $description=$_POST['description_val'];
 $normalhour=$_POST['normalhour_val'];
 $happyhour=$_POST['happyhour_val'];
 mysql_query("insert into preise values('','$normalhour','$happyhour','$description')",$conn);
 echo mysql_insert_id();
 exit();
}
}
?>
