<?php

session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>



<!DOCTYPE html>
<?php

include("db.php");
$select = mysql_query("SELECT * FROM leihequipment",$conn);

?>
<html>
<head>
	<title>Leihequipment</title>
		<meta charset="utf-8">
  <meta name="viewport">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/modify_leihequipment.js"></script>

</head>
<body>
  <div class="container">


  <div class="jumbotron">

  <h1>Monkey-Cage</h1>
  <a href="logout.php"  style="align-content: right; padding-left: 900px; padding-bottom: 300px " >  <button  type="button" class="btn btn-danger">Logout </button> </a>
  <p>Admin Panel</p>
  </div>
  <div class="panel panel-default">
  <div class="panel-body">


  <div class="panel-body">

  <form  name="myForm"   action=""   method="post" >
  <div class="col-lg-12">
    <h2 style="color:red;">Leihequipment</h2>
  </div>
  <br>

  <div  style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid;  overflow-x: scroll;  ">

    <table class="table table-bordered" id="leihequipment_table" >
      <thead>
        <tr>
          <th>Leihequipment</th>
          <th>Erwachsene</th>
          <th>Kinder</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row=mysql_fetch_array($select))
        {
         ?>
         <tr id="row<?php echo $row['id'];?>">
          <td id="description<?php echo $row['id'];?>"><?php echo $row['description'];?></td>
          <td id="erwachsene<?php echo $row['id'];?>"><?php echo $row['erwachsene'];?></td>
          <td id="kinder<?php echo $row['id'];?>"><?php echo $row['kinder'];?></td>
          <td>
           <input type='button' class="edit_button" id="edit_button<?php echo $row['id'];?>" value="edit" onclick="edit_row('<?php echo $row['id'];?>');">
           <input type='button' class="save_button" style="display:none;" id="save_button<?php echo $row['id'];?>" value="save" onclick="save_row('<?php echo $row['id'];?>');">
           <input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
          </td>
         </tr>
         <?php
        }
        ?>
        <tr id="new_row">
         <td><input type="text" id="new_description"></td>
         <td><input type="text" id="new_erwachsene"></td>
         <td><input type="text" id="new_kinder"></td>
         <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-lg-12" style="text-align: center;">
  <br>
  <br>
  <input name="update"  type="submit" value="Einreichen" >
  </div>
</form>
</div>
</div>
</div>
</div>

</body>
</html>
<?php

}


?>
