<?php
session_start();
if (!isset($_SESSION['user_email'])) {
  //echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
?>
  <!DOCTYPE html>
  <?php
  $params = [];
  $url = $_SERVER['QUERY_STRING'];
  parse_str($url, $params);
  $album_id = $params['id'];

  include("db.php");
  $select_query = "SELECT * FROM album WHERE id=".$album_id;
  $select = mysql_query($select_query,$conn);
  $album_data = mysql_fetch_array($select);

  $select_query = "SELECT * FROM image WHERE album_id=".$album_id;
  $select = mysql_query($select_query,$conn);

  ?>
  <html>
  <head>
  	<title>Album</title>
  		<meta charset="utf-8">
    <meta name="viewport">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='assets/css/custom.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
    /* must apply only after HTML has loaded */
    $(document).ready(function () {
    /*
    $("button#modalsubmit").click(function(){
            var $form = $(this);
            var formData = new FormData($(this)[0]);
            console.log(formData);
            var $target = $($form.attr('data-target'));
  	        $.ajax({
                type: 'POST',
                url : 'upload_image.php',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
          	    success: function(data,status){
   	                //$("#thanks").html(msg)
                    alert(status);
   		       	      //$("#imageUploadModal").modal('hide');
                    $target.html(data);
   		          },
  		          error: function(){
  			             alert("failure");
  			        }
        		});
  	});*/

    $('#imageUploadModal').on('submit', 'form[data-async]', function(e) {
        var $form = $(this);
        console.log($form);
        var enctype = $form.attr('id')
        console.log('line number 72');
        var formData = new FormData($(this)[0]);
        console.log(formData);
        var form = $('#imagedata')[0];
        var formData = new FormData(form);
        console.log($form.attr('method'));
        console.log($form.attr('action'));
        console.log(formData);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,

            success: function(data, status) {
                //$('#remoteModal .modal-content').html(data);
                $("#imageUploadModal").modal('hide');
                location.reload();
            }
        });
   /*
        if(enctype == 'multipart') {
            var formData = new FormData(this);
            console.log(formData);

            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,

                success: function(data, status) {
                    $('#remoteModal .modal-content').html(data);
                }
            });
        }
        else {
            var submitButton = $("input[type='submit'][clicked=true], button[type='submit'][clicked=true]", $form);
            var formData = $form.serializeArray();
            console.log('line no 97');
            console.log(formData);

            if(submitButton.size() === 1) {
                formData.push({ name: $(submitButton[0]).attr("name"), value: "1" });
            }
            else if(submitButton.size() !== 0) {
                console.log("Weird, multiple submit-buttons pressed!");
            }

            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: formData,
                cache: false,

                success: function(data, status) {
                    $('#remoteModal .modal-content').html(data);
                }
            });
        } */

        e.preventDefault();
    });

    $('.modal').on("click", 'input[type="submit"], button[type="submit"]', function() {
        $('form[data-async] input[type=submit], form[data-async] button[type=submit]', $(this).parents("form")).removeAttr("clicked");
        $(this).attr("clicked", "true");
    });
     $("#contact_form").on("submit", function(e) {
         var postData = $(this).serializeArray();
         var formURL = $(this).attr("action");
         $.ajax({
             url: formURL,
             type: "POST",
             data: postData,
             success: function(data, textStatus, jqXHR) {
                 $('#contact_dialog .modal-header .modal-title').html("Result");
                 $('#contact_dialog .modal-body').html(data);
                 $("#submitForm").remove();
             },
             error: function(jqXHR, status, error) {
                 console.log(status + ": " + error);
             }
         });
         e.preventDefault();
     });

     $("#submitForm").on('click', function() {
         $("#contact_form").submit();
     });
     function showModal(id){
       $('#imageUploadModal').modal({show:true});
     }
     document.getElementById("addimage").addEventListener("click", showModal, false);
    });
    </script>

    </script>
  </head>
  <body>
    <div class="container">


    <div class="jumbotron">

    <h1>Monkey-Cage</h1>
    <p>User Panel</p>
    </div>
    <div class="panel panel-default">
    <div class="panel-body">
      <!-- Button trigger modal -->
    <!-- <form  name="myForm"   action=""   method="post" > -->
    <div class="row">
    <div class="col-lg-12">
      <h2 style="color:red;">Album: <?php echo $album_data['name'];?></h2>
    </div>
  </div>
    <br>
    <?php
    $i=0;
    $row = mysql_num_rows ( $select );
    //while ($row = mysql_fetch_array($select))
    while($row){
    $row--;
    if (($i % 4) == 0) {
    $value = mysql_fetch_array($select);
    $parameters =array(
     'id'=> $value['id']);
    $url = 'view_album.php?' . http_build_query($parameters);
    ?>
    <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-image">
          <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
        </div>
        <div class="card-text">
          <?php echo $value['name']; ?>
        </div>
      </div>
    </div>
<?php
   } else if  ( ($i%4) == 3) {
     $value = mysql_fetch_array($select);
     $parameters =array(
      'id'=> $value['id']);
     $url = 'view_album.php?' . http_build_query($parameters);
     ?>
     <div class="col-sm-3">
       <div class="card">
         <div class="card-image">
           <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
         </div>
         <div class="card-text">
           <?php echo $value['name']; ?>
         </div>
       </div>
     </div>
     </div>
     <?php
   } else {
     $value = mysql_fetch_array($select);
     $parameters =array(
      'id'=> $value['id']);
     $url = 'view_album.php?' . http_build_query($parameters);
     ?>
     <div class="col-sm-3">
       <div class="card">
         <div class="card-image">
           <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
         </div>
         <div class="card-text">
           <?php echo $value['name']; ?>
         </div>
       </div>
     </div>
     <?php
   }
   ?>
   <?php
     $i++;
     }
    ?>
  <!--
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
  </div> -->
  <!-- </form> -->
  </div>
  </div>
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->
  <div class="modal fade" id="imageUploadModal" href="#imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Upload Image</h4>
        </div>
        <div class="modal-body">
          <form  id="imagedata" data-async data-target="#imageUploadModal"  action="upload_image.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="recipient-name" class="control-label">Image Label:</label>
              <input type="text" class="form-control" name="imagelabel" id="imagelabel" required>
            </div>
            <div class="form-group">
              <label for="message-text" class="control-label">Image File:</label>
              <input type="file" class="form-control" name="imagefile" id="imagefile" accept="image/*" required>
            </div>
            <input type="hidden" class="form-control" name="album_id" id="album_id" value="<?php echo $album_data['id'];?>">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!-- <button type="button" id="modalsubmit" class="btn btn-primary">Upload</button> -->
          <button form="imagedata" class="btn btn-primary" type="submit">Upload</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
  </html>


<?php
} else {
?>
<!DOCTYPE html>
<?php
$params = [];
$url = $_SERVER['QUERY_STRING'];
parse_str($url, $params);
$album_id = $params['id'];

include("db.php");
$select_query = "SELECT * FROM album WHERE id=".$album_id;
$select = mysql_query($select_query,$conn);
$album_data = mysql_fetch_array($select);

$select_query = "SELECT * FROM image WHERE album_id=".$album_id;
$select = mysql_query($select_query,$conn);

?>
<html>
<head>
	<title>Album</title>
		<meta charset="utf-8">
  <meta name="viewport">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <link href='assets/css/custom.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
  /* must apply only after HTML has loaded */
  $(document).ready(function () {
  /*
  $("button#modalsubmit").click(function(){
          var $form = $(this);
          var formData = new FormData($(this)[0]);
          console.log(formData);
          var $target = $($form.attr('data-target'));
	        $.ajax({
              type: 'POST',
              url : 'upload_image.php',
              data: formData,
              mimeType: "multipart/form-data",
              contentType: false,
              cache: false,
              processData: false,
        	    success: function(data,status){
 	                //$("#thanks").html(msg)
                  alert(status);
 		       	      //$("#imageUploadModal").modal('hide');
                  $target.html(data);
 		          },
		          error: function(){
			             alert("failure");
			        }
      		});
	});*/

  $('#imageUploadModal').on('submit', 'form[data-async]', function(e) {
      var $form = $(this);
      console.log($form);
      var enctype = $form.attr('id')
      console.log('line number 72');
      var formData = new FormData($(this)[0]);
      console.log(formData);
      var form = $('#imagedata')[0];
      var formData = new FormData(form);
      console.log($form.attr('method'));
      console.log($form.attr('action'));
      console.log(formData);
      $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: formData,
          mimeType: "multipart/form-data",
          contentType: false,
          cache: false,
          processData: false,

          success: function(data, status) {
              //$('#remoteModal .modal-content').html(data);
              $("#imageUploadModal").modal('hide');
              location.reload();
          }
      });
 /*
      if(enctype == 'multipart') {
          var formData = new FormData(this);
          console.log(formData);

          $.ajax({
              type: $form.attr('method'),
              url: $form.attr('action'),
              data: formData,
              mimeType: "multipart/form-data",
              contentType: false,
              cache: false,
              processData: false,

              success: function(data, status) {
                  $('#remoteModal .modal-content').html(data);
              }
          });
      }
      else {
          var submitButton = $("input[type='submit'][clicked=true], button[type='submit'][clicked=true]", $form);
          var formData = $form.serializeArray();
          console.log('line no 97');
          console.log(formData);

          if(submitButton.size() === 1) {
              formData.push({ name: $(submitButton[0]).attr("name"), value: "1" });
          }
          else if(submitButton.size() !== 0) {
              console.log("Weird, multiple submit-buttons pressed!");
          }

          $.ajax({
              type: $form.attr('method'),
              url: $form.attr('action'),
              data: formData,
              cache: false,

              success: function(data, status) {
                  $('#remoteModal .modal-content').html(data);
              }
          });
      } */

      e.preventDefault();
  });

  $('.modal').on("click", 'input[type="submit"], button[type="submit"]', function() {
      $('form[data-async] input[type=submit], form[data-async] button[type=submit]', $(this).parents("form")).removeAttr("clicked");
      $(this).attr("clicked", "true");
  });
   $("#contact_form").on("submit", function(e) {
       var postData = $(this).serializeArray();
       var formURL = $(this).attr("action");
       $.ajax({
           url: formURL,
           type: "POST",
           data: postData,
           success: function(data, textStatus, jqXHR) {
               $('#contact_dialog .modal-header .modal-title').html("Result");
               $('#contact_dialog .modal-body').html(data);
               $("#submitForm").remove();
           },
           error: function(jqXHR, status, error) {
               console.log(status + ": " + error);
           }
       });
       e.preventDefault();
   });

   $("#submitForm").on('click', function() {
       $("#contact_form").submit();
   });
   function showModal(id){
     $('#imageUploadModal').modal({show:true});
   }
   document.getElementById("addimage").addEventListener("click", showModal, false);
  });
  </script>

  </script>
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
    <!-- Button trigger modal -->
  <!-- <form  name="myForm"   action=""   method="post" > -->
  <div class="row">
  <div class="col-lg-12">
    <h2 style="color:red;">Album: <?php echo $album_data['name'];?></h2>
  </div>
</div>
  <br>
  <?php
  $i=0;
  $row = mysql_num_rows ( $select ) + 1;
  //while ($row = mysql_fetch_array($select))
  while($row)
  {
  $row--;
  if (($i % 4) == 0) {
  ?>
  <div class="row">
    <?php
    if($row == 0) {
      ?>
      <div class="col-sm-3" id="addimage">
        <div class="card">
          <div class="card-image">
            <img src="assets/img/plus.png" class="img-responsive img-rounded" ></img>
          </div>
          <div class="card-text">Add Image
          </div>
        </div>
      </div>
      <?php
    } else {
      $value = mysql_fetch_array($select);
      $parameters =array(
       'id'=> $value['id']);
      $url = 'view_album.php?' . http_build_query($parameters);
      ?>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-image">
            <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
          </div>
          <div class="card-text">
            <?php echo $value['name']; ?>
          </div>
        </div>
      </div>
    <?php
    }
 } else if  ( ($i%4) == 3) {
   ?>
   <?php
   if($row == 0) {
     ?>
     <div class="col-sm-3" id="addimage">
       <div class="card">
         <div class="card-image">
           <img src="assets/img/plus.png" class="img-responsive img-rounded"></img>
         </div>
         <div class="card-text">Add Image
         </div>
       </div>
     </div>
   <?php
 } else {
   $value = mysql_fetch_array($select);
   $parameters =array(
    'id'=> $value['id']);
   $url = 'view_album.php?' . http_build_query($parameters);
   ?>
   <div class="col-sm-3">
     <div class="card">
       <div class="card-image">
         <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
       </div>
       <div class="card-text">
         <?php echo $value['name']; ?>
       </div>
     </div>
   </div>
<?php
 }
 ?>
   </div>
   <?php
 } else {
   ?>
   <?php
   if($row == 0) {
     ?>
     <div class="col-sm-3" id="addimage">
       <div class="card">
         <div class="card-image">
           <img src="assets/img/plus.png" class="img-responsive img-rounded"></img>
         </div>
         <div class="card-text">Add Image
         </div>
       </div>
     </div>
   <?php
 } else {
   $value = mysql_fetch_array($select);
   $parameters =array(
    'id'=> $value['id']);
   $url = 'view_album.php?' . http_build_query($parameters);
   ?>
   <div class="col-sm-3">
     <div class="card">
       <div class="card-image">
         <a href="<?php echo $value['filename']; ?>"><img src="<?php echo $value['filename']; ?>" class="img-responsive img-rounded"> </img></a>
       </div>
       <div class="card-text">
         <?php echo $value['name']; ?>
       </div>
     </div>
   </div>
   <?php
    }
    ?>
   <?php
 }
 ?>
 <?php
   $i++;
   }
  ?>
<!--
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
</div> -->
<!-- </form> -->
</div>
</div>
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->
<div class="modal fade" id="imageUploadModal" href="#imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Upload Image</h4>
      </div>
      <div class="modal-body">
        <form  id="imagedata" data-async data-target="#imageUploadModal"  action="upload_image.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Image Label:</label>
            <input type="text" class="form-control" name="imagelabel" id="imagelabel" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Image File:</label>
            <input type="file" class="form-control" name="imagefile" id="imagefile" accept="image/*" required>
          </div>
          <input type="hidden" class="form-control" name="album_id" id="album_id" value="<?php echo $album_data['id'];?>">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" id="modalsubmit" class="btn btn-primary">Upload</button> -->
        <button form="imagedata" class="btn btn-primary" type="submit">Upload</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
}
?>
