<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");
$select_table = "SELECT * FROM eintrittskarten";
$run_query= mysql_query( $select_table, $conn);

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $description=$_POST['description_val'];
 $one11er=$_POST['one11er_val'];
 $two3monate=$_POST['two3monate_val'];
 $threehalbjahr=$_POST['threehalbjahr_val'];
 $fourjahr=$_POST['fourjahr_val'];
 $fivejahrmtl=$_POST['fivejahrmtl_val'];

 mysql_query("update eintrittskarten set description='$description',one11er='$one11er',two3monate='$two3monate',threehalbjahr='$threehalbjahr',fourjahr='$fourjahr',fivejahrmtl='$fivejahrmtl' where id='$row'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from eintrittskarten where id='$row_no'",$conn);
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $description=$_POST['description_val'];
 $one11er=$_POST['one11er_val'];
 $two3monate=$_POST['two3monate_val'];
 $threehalbjahr=$_POST['threehalbjahr_val'];
 $fourjahr=$_POST['fourjahr_val'];
 $fivejahrmtl=$_POST['fivejahrmtl_val'];

 mysql_query("insert into eintrittskarten values('','$description','$one11er','$two3monate','$threehalbjahr','$fourjahr','$fivejahrmtl')",$conn);
 echo mysql_insert_id();
 exit();
}
}
?>
