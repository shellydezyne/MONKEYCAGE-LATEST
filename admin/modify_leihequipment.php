<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");
$select_table = "SELECT * FROM leihequipment";
$run_query= mysql_query( $select_table, $conn);

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $description=$_POST['description_val'];
 $erwachsene=$_POST['erwachsene_val'];
 $kinder=$_POST['kinder_val'];

 mysql_query("update leihequipment set description='$description',erwachsene='$erwachsene',kinder='$kinder' where id='$row'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from leihequipment where id='$row_no'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $description=$_POST['description_val'];
 $erwachsene=$_POST['erwachsene_val'];
 $kinder=$_POST['kinder_val'];
 mysql_query("insert into leihequipment values('','$description','$erwachsene','$kinder')",$conn);
 echo mysql_insert_id();
 exit();
}
}
?>
