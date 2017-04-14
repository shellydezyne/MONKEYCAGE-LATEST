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


?>
<html>
<head>
	<title>Add Album</title>
		<meta charset="utf-8">
  <meta name="viewport">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.js"></script>

</head>
<body>
  <div class="container">


  <div class="jumbotron">

  <h1>Monkey-Cage</h1>
  <!-- <a href="logout.php"  style="align-content: right; padding-left: 900px; padding-bottom: 300px " >  <button  type="button" class="btn btn-danger">Logout </button> </a> -->
  <p>Admin Panel</p>
  </div>
  <div class="panel panel-default">


  <div class="panel-body">

  <form  name="myForm"   action=""   method="post"  enctype="multipart/form-data">
  <div class="col-lg-12">
    <h2 style="color:red;">Add an album</h2>
  </div>
  <br>

  <div class="form-group">
    <label for="albumname">Album Name(*)</label>
    <input type="text" name="albumname" id="albumname" class="form-control" placeholder="Album Name" required>
  </div>
  <div class="form-group">
    <label for="description">Album Description</label>
    <textarea class="form-control" name="albumdescription" rows="3"></textarea>
    <p class="help-block">Here you describe the content of your album(optional)</p>
  </div>
  <div class="form-group">
    <label for="albumthumbnail">File input</label>
    <input type="file" name="albumthumbnail" id="albumthumbnail" required>
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="col-lg-12" style="text-align: center;">
  <br>
  <br>
  <input class="btn btn-default" name="update" type="submit" value="Einreichen">
  </div>
</form>
</div>
</div>
</div>

</body>
</html>
<?php

if(isset($_FILES['albumthumbnail']) && isset($_POST['albumname'])){
   error_reporting(E_ERROR | E_PARSE);
   $errors= array();
   $albumname = $_POST['albumname'];
   $albumdescription = $_POST['albumdescription'];
   $file_name = $_FILES['albumthumbnail']['name'];
   $file_size = $_FILES['albumthumbnail']['size'];
   $file_tmp  = $_FILES['albumthumbnail']['tmp_name'];
   $file_type = $_FILES['albumthumbnail']['type'];
   $file_ext  = strtolower(end(explode('.',$_FILES['albumthumbnail']['name'])));



   $extensions = array("bmp","jpg","jpeg","png");

   if(in_array($file_ext,$expensions) === false){
      $errors[]="extension not allowed, please choose a BMP or JPEG or PNG file.";
   }

   if($file_size > 20971520){
      $errors[]='File size must not be more than 2 MB';
   }

   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"album/$file_name");
      //echo "Success";
   }else{
      print_r($errors);
   }


// $insert_product = "INSERT INTO products (product_image ) VALUES ('$file_tmp')  ";
  $insert_image = "INSERT INTO image (name,description,filename ) VALUES ('$file_name','$albumdescription','album/$file_name')  ";
  $run_insert_image = mysql_query( $insert_image, $conn);
  $insert_image_errmsg = mysql_error($conn);
  $image_id = mysql_insert_id();


  $insert_album = "INSERT INTO album (name,description,filename ) VALUES ('$albumname','$albumdescription','album/$file_name')  ";
  $run_insert_album = mysql_query( $insert_album, $conn);
  $insert_album_errmsg = mysql_error($conn);
  $album_id = mysql_insert_id();


  if ($run_insert_image) {
      mysql_query("update image set album_id='$album_id' where id='$image_id'",$conn);
      //echo "New record created successfully";
      //echo "<script>alert('Album Created')</script>";
  } else {
      echo "<script>alert('Album Creation Failed: Check the bottom of the page for details.')</script>";
      echo "Error: " . $insert_image .  "<br>" . $insert_image_errmsg;
      //echo "<script>alert('" .$insert_image_errmsg. "')</script>";
  }

 if ($run_insert_album) {
     //echo "New record created successfully";
     echo "<script>alert('Album Created')</script>";
 } else {
     echo "<script>alert('Album Creation Failed: Check the bottom of the page for details.')</script>";
     echo "Error: " . $insert_album .  "<br>" . $insert_album_errmsg;
     //echo "<script>alert('" .$insert_album_errmsg. "')</script>";
 }

}
/*else {
    echo "<script>alert('Album " .$_POST['albumname'] . " with thumbnail " .$_FILES['albumthumbnail']['name'] ."Not Created')</script>";
}*/



}


?>
