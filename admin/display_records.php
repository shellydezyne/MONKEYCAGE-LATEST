<html>
<head>
  <meta http-equiv="refresh" content="10" > 
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="modify_records.js"></script>
</head>
<body>
<div id="wrapper">

<?php
$host="localhost";
$username="root";
$password="";
$databasename="gallery";
$connect=mysqli_connect($host,$username,$password,$databasename);
$db=mysqli_select_db($connect,$databasename);

$select =mysqli_query($connect,"SELECT * FROM user_detail");
?>

<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>NAME</th>
<th>AGE</th>
<th></th>
</tr>
<?php
while ($row=mysqli_fetch_array($select))
{
 ?>
 <tr id="row<?php echo $row['id'];?>">
  <td id="name_val<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
  <td id="age_val<?php echo $row['id'];?>"><?php echo $row['age'];?></td>
  <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['id'];?>" value="edit" onclick="edit_row('<?php echo $row['id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['id'];?>" value="save" onclick="save_row('<?php echo $row['id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 <td><input type="text" id="new_name"></td>
 <td><input type="text" id="new_age"></td>
 <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
</table>

</div>
</body>
</html>
