<?php
session_start();

if (!isset($_SESSION['user_email'])) {

  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


include("db.php");


if(isset($_FILES['imagefile']) && isset($_POST['imagelabel']) && isset($_POST['album_id'])){
   error_reporting(E_ERROR | E_PARSE);
   $errors= array();
   $imageame = $_POST['imagelabel'];
   $album_id = $_POST['album_id'];
   $file_name = $_FILES['imagefile']['name'];
   $file_size = $_FILES['imagefile']['size'];
   $file_tmp  = $_FILES['imagefile']['tmp_name'];
   $file_type = $_FILES['imagefile']['type'];
   $file_ext  = strtolower(end(explode('.',$_FILES['imagefile']['name'])));



   $extensions = array("bmp","jpg","jpeg","png");

   if(in_array($file_ext,$expensions) === false){
      $errors[]="extension not allowed, please choose a BMP or JPEG or PNG file.";
   }

   if($file_size > 20971520){
      $errors[]='File size must not be more than 2 MB';
   }

   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"album/$file_name");
      echo "Success";
   }else{
      print_r($errors);
   }


// $insert_product = "INSERT INTO products (product_image ) VALUES ('$file_tmp')  ";
  $insert_image = "INSERT INTO image (name,description,filename,album_id ) VALUES ('$file_name','$file_name','album/$file_name','$album_id')  ";
  $run_insert_image = mysql_query( $insert_image, $conn);

 if ($run_insert_image) {
     echo "<script>alert('Image Uploaded')</script>";
     exit();
 } else {
     echo "Error: " . $insert_image .  "<br>" . mysql_error($conn);
 }

} else {
    echo "<script>alert('Album " .$_POST['imagelabel'] . " with thumbnail " .$_FILES['imagefile']['name'] .$_POST['album_id']."Not Created')</script>";
}
}
?>
