<?php
$host="localhost";
$username="root";
$password="";
$databasename="gallery";

$connect=mysqli_connect($host,$username,$password,$databasename);
$db=mysqli_select_db($connect,$databasename);

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];

 mysqli_query($connect,"update user_detail set name='$name',age='$age' where id='$row'");
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($connect,"delete from user_detail where id='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];
 mysqli_query($connect,"insert into user_detail values('','$name','$age')");
 echo mysqli_insert_id();
 exit();
}
?>
