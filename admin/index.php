<?php

session_start();

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>

<?php

include("db.php");

$select_table = "SELECT * FROM main";

$run_query= mysql_query( $select_table, $conn);

$get_info = mysql_fetch_array($run_query);

$titlep =$get_info['title'];
$contentp =$get_info['content'];
$tf1p = $get_info['tf1'];
$tc1p = $get_info['tc1'];
$tf2p = $get_info['tf2'];
$tc2p = $get_info['tc2'];
$tf3p = $get_info['tf3'];
$tc3p = $get_info['tc3'];
$to1p = $get_info['to1'];
$co1p = $get_info['co1'];
$to2p = $get_info['to2'];
$co2p = $get_info['co2'];
$to3p = $get_info['to3'];
$co3p = $get_info['co3'];
$to4p = $get_info['to4'];
$co4p = $get_info['co4'];

//prices
$a1dayp = $get_info['a1day'];
$ah1dayp = $get_info['ah1day'];

$a1monthp = $get_info['a1month'];
$a3monthp= $get_info['a3month'];
$a6monthp = $get_info['a6month'];
$ayearp = $get_info['ayear'];
$ayyearp = $get_info['ayyear'];


$s1dayp = $get_info['s1day'];
$sh1dayp = $get_info['sh1day'];

$s1monthp = $get_info['s1month'];
$s3monthp= $get_info['s3month'];
$s6monthp = $get_info['s6month'];
$syearp = $get_info['syear'];
$syyearp = $get_info['syyear'];


$k1dayp = $get_info['k1day'];
$kh1dayp = $get_info['kh1day'];

$k1monthp = $get_info['k1month'];
$k3monthp= $get_info['k3month'];
$k6monthp = $get_info['k6month'];
$kyearp = $get_info['kyear'];
$kyyearp = $get_info['kyyear'];


$f1dayp = $get_info['f1day'];
$fh1dayp = $get_info['fh1day'];
$kk1dayp = $get_info['kk1day'];
$kkh1dayp = $get_info['kkh1day'];
$eelp = $get_info['eel'];
$eecp = $get_info['eec'];
$eebp = $get_info['eeb'];


$eklp= $get_info['ekl'];
$ekcp = $get_info['ekc'];
$ekbp=$get_info['ekb'];

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Monkey_Cage- Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="admin.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    
<!--<script>
function validateForm() {
    var a1d = document.forms["myForm"]["A1day"].value;
    var a1m= document.forms["myForm"]["A1month"].value;
    var a3m= document.forms["myForm"]["A3month"].value;
    var a6m= document.forms["myForm"]["A6month"].value;
    var s1d= document.forms["myForm"]["S1day"].value;
    var s1m= document.forms["myForm"]["S1month"].value;
    var s3m= document.forms["myForm"]["S3month"].value;
    var s6m= document.forms["myForm"]["S6month"].value;
    var sy= document.forms["myForm"]["Syear"].value;
    var k1d= document.forms["myForm"]["K1day"].value;
    var k1m= document.forms["myForm"]["K1month"].value;
    var k3m= document.forms["myForm"]["K3month"].value;
    var k6m= document.forms["myForm"]["K6month"].value;
    var ky= document.forms["myForm"]["Kyear"].value;
    var f1d= document.forms["myForm"]["F1day"].value;
    var kk1d= document.forms["myForm"]["KK1day"].value;



    if (a1d == null || a1d == "" || a1m == null || a1m == "" ||  a3m == null || a3m == "" ||  a6m == null ||a6m == "" ||  ay == null ||ay == ""
    ||  s1d == null || s1d == "" || s1m == null || s1m == "" ||  s3m == null || s3m == "" ||  s6m == null ||s6m == "" ||  sy == null ||sy == ""
    ||  k1d == null || k1d == "" || k1m == null || k1m == "" ||  k3m == null || k3m == "" ||  k6m == null ||k6m == "" ||  ky == null ||ky == ""
    ||  f1d == null || f1d == "" || kk1d == null || kk1d == "") {

        text="Only Integers must be filled";

        document.getElementById("demo1").innerHTML = text;       
        document.getElementById("demo2").innerHTML = text;
        document.getElementById("demo3").innerHTML = text;
        document.getElementById("demo4").innerHTML = text;
        document.getElementById("demo5").innerHTML = text;
        document.getElementById("demo6").innerHTML = text;
        document.getElementById("demo7").innerHTML = text;
        document.getElementById("demo8").innerHTML = text;
        document.getElementById("demo9").innerHTML = text;
        document.getElementById("demo10").innerHTML = text;
        document.getElementById("demo11").innerHTML = text;
        document.getElementById("demo12").innerHTML = text;
        document.getElementById("demo13").innerHTML = text;
        document.getElementById("demo14").innerHTML = text;
        document.getElementById("demo15").innerHTML = text;
        document.getElementById("demo16").innerHTML = text;
        document.getElementById("demo17").innerHTML = text;




return false;
    }

}
</script>-->
<script> 
var maxAmount = 4000;
function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
        textField.value = textField.value.substring(0, maxAmount);
  } else { 
        showCountField.value = maxAmount - textField.value.length;
  }
}
</script>

<script> 
var maxAmount1 = 50;
function textCounter1(x, y) {
    if (x.value.length > maxAmount1) {
        x.value = x.value.substring(0, maxAmount1);
  } else { 
        y.value = maxAmount1 - x.value.length;
  }
}
</script>

<script> 
var maxAmount2 = 300;
function textCounter2(x, y) {
    if (x.value.length > maxAmount2) {
        x.value = x.value.substring(0, maxAmount2);
  } else { 
        y.value = maxAmount2 - x.value.length;
  }
}
</script>
<script> 
var maxAmount3 = 2000;
function textCounter3(x, y) {
    if (x.value.length > maxAmount3) {
        x.value = x.value.substring(0, maxAmount2);
  } else { 
        y.value = maxAmount3 - x.value.length;
  }
}
</script>




<script language="javascript">
    function enableDisable(bEnable, textBoxID, textBoxID1)
    {
         document.getElementById(textBoxID).disabled = bEnable
         document.getElementById(textBoxID1).disabled = bEnable
    }
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
  	

  <div class="panel-body">	

  	<form  name="myForm"   action=""   method="post" >

    <!--
<h2  style="color:red;" >Timings</h2>
  		<div class="col-lg-12">
          <div class="table-responsive">
          	 <table class="table">
  			<tr>
		<th>SAMSTAG</th>
		<th>SONNTAG</th>
		<th>MONTAG</th>
		<th>DIENSTAG</th>
		<th>MITTWOCH</th>
		<th>DONNERSTAG</th>
		<th>DONNERSTAG</th>

	</tr>


	<tr>
	<td>
<label>Von: </label>
<select name="SATo" id="sato" >
		
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SATc" id="satc" >
	
  ?> 
</select><br><br><input type="checkbox" name="satclo" id="checkBox" onclick="enableDisable(this.checked, 'sato','satc')">Geschlossen<br></td>



	<td>
    <label>Von: </label>
<select name="SUNo" id="suno">
	
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SUNc" id="sunc">
		
  ?> 
</select><br><br><input type="checkbox" name="sunclo" id="checkBox" onclick="enableDisable(this.checked, 'suno','sunc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="MONo" id="mono">
		
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="MONc" id="monc">
		
  ?> 
</select><br><br><input type="checkbox" name="monclo" id="checkBox" onclick="enableDisable(this.checked, 'mono','monc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="TUEo" id="tueo">
		
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="TUEc" id="tuec">
		
  ?> 
</select><br><br><input type="checkbox" name="tueclo" id="checkBox" onclick="enableDisable(this.checked, 'tueo','tuec')">Geschlossen<br></td></input></td>
	<td>
    <label>Von: </label>

<select name="WEDo" id="wedo">
		
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="WEDc" id="wedc">
		
  ?> 
</select><br><br><input type="checkbox" name="wedclo" id="checkBox" onclick="enableDisable(this.checked, 'wedo','wedc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="THUo" id="thuo">
	
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="THUc" id="thuc" >
	
  ?> 
</select><br><br><input type="checkbox" name="thuclo" id="checkBox" onclick="enableDisable(this.checked, 'thuo','thuc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="FRIo" id="frio">
		
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="FRIc" id="fric">
	
  ?> 
</select><br><br><input type="checkbox" name="friclo" id="checkBox" onclick="enableDisable(this.checked, 'frio','fric')">Geschlossen<br></td>
   </tr>
  



</table>
</div>
  		</div>-->

<h2  style="color:red;" >Essen und Trinken</h2>
<div class="col-lg-12" >
  
<h4><a href="pdf1.php" target="blank"> PDF</a></h4>

</div>

<br>

<br>

<h2  style="color:red;" >Dienstleistungen</h2>
  		<div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="ts"  onKeyDown="textCounter1(this.form.ts,this.form.countDisplayts);" onKeyUp="textCounter1(this.form.ts,this.form.countDisplayts);"><?php echo $titlep; ?> </textarea>
          	 	 <br>
                 <input readonly type="text" name="countDisplayts" size="3" maxlength="3" value="50"> Characters Remaining</td>	
              
          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="50" cols="50" style="margin: 0px; height: 546px; width: 381px;" name="cs" onKeyDown="textCounter(this.form.cs,this.form.countDisplaycs);" onKeyUp="textCounter(this.form.cs,this.form.countDisplaycs);">
                <?php echo $contentp; ?>  
                </textarea>
                   <br>
                   <input readonly type="text" name="countDisplaycs" size="3" maxlength="3" value="4000"> Characters Remaining</td> 

                </td>

          	 	</tr>




          	 	</table>

          	 	</div>



  			</div>
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Feature1</th>
          	 		
          	 	</tr>
          	 <tr>
                <td><textarea rows="1" cols="50" name="tf1"  onKeyDown="textCounter1(this.form.tf1,this.form.countDisplaytf1);" onKeyUp="textCounter1(this.form.tf1,this.form.countDisplaytf1);"><?php echo $tf1p; ?>  </textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf1" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
          	 	</tr>
          	 		
          	 		<th>Content1</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="4" cols="50"  name="tc1" onKeyDown="textCounter2(this.form.tc1,this.form.countDisplaytc1);" onKeyUp="textCounter2(this.form.tc1,this.form.countDisplaytc1);"><?php echo $tc1p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc1" size="3" maxlength="3" value="300"> Characters Remaining</td> 

                </td>

          	 	</tr>
          	 		<tr>
          	 		<th>Feature2</th>
          	 		
          	 	</tr>
          	  <tr>
                <td><textarea rows="1" cols="50" name="tf2"  onKeyDown="textCounter1(this.form.tf2,this.form.countDisplaytf2);" onKeyUp="textCounter1(this.form.tf2,this.form.countDisplaytf2);"><?php echo $tf2p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf2" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>

          	 	<tr>
          	 		
          	 		<th>Content2</th>
          	 	</tr>
          	 <tr>
                
                <td><textarea rows="4" cols="50"  name="tc2" onKeyDown="textCounter2(this.form.tc2,this.form.countDisplaytc2);" onKeyUp="textCounter2(this.form.tc2,this.form.countDisplaytc2);"><?php echo $tc2p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc2" size="3" maxlength="3" value="300"> Characters Remaining</td> 

                </td>

              </tr>
          	 		<tr>
          	 		<th>Feature3</th>
          	 		
          	 	</tr>
          	 	 <tr>
                <td><textarea rows="1" cols="50" name="tf3"  onKeyDown="textCounter1(this.form.tf3,this.form.countDisplaytf1);" onKeyUp="textCounter1(this.form.tf3,this.form.countDisplaytf3);"><?php echo $tf3p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf3" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>

          	 	<tr>
          	 		
          	 		<th>Content3</th>
          	 	</tr>
          	 	<tr>
                
                <td><textarea rows="4" cols="50"  name="tc3" onKeyDown="textCounter2(this.form.tc3,this.form.countDisplaytc3);" onKeyUp="textCounter2(this.form.tc3,this.form.countDisplaytc3);"><?php echo $tc3p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc3" size="3" maxlength="3" value="300"> Characters Remaining</td> 

                </td>

              </tr>

          	 	 	 		



  			</div>
  			</div>

             <div class="col-lg-12" > 
  			<div class="table-responsive">
          	 <table class="table">
          	 			<tr>
          	 		<a href="pic1.php" target="blank" >Bild hochladen1</a>
                <br>
                <a href="pic2.php" target="blank">Bild hochladen2</a>
          	 		</tr>

          	 		      	 	
          	 		
          	 			
   
          	 		</div>
          	 	</table>
          	 </div>

          	 	</div>



<h2  style="color:red;" >Unsere Angebote</h2>
<div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title1</th>
          	 		
          	 	</tr>
          	  <tr>
                <td><textarea rows="1" cols="50" name="to1"  onKeyDown="textCounter1(this.form.to1,this.form.countDisplayto1);" onKeyUp="textCounter1(this.form.to1,this.form.countDisplayto1);"><?php echo $to1p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplayto1" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content1</th>
          	 		
          	 	</tr>
          	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co1" onKeyDown="textCounter3(this.form.co1,this.form.countDisplayco1);" onKeyUp="textCounter3(this.form.co1,this.form.countDisplayco1);"><?php echo $co1p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplayco1" size="3" maxlength="3" value="2000"> Characters Remaining</td> 

                

              </tr>
          	 		<tr>
          	 		
          	 	
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><a href="pic3.php" target="blank" >Bild hochladen3</a></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
                  <div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title2</th>
          	 		
          	 	</tr>
          	 	<tr>
                <td><textarea rows="1" cols="50" name="to2"  onKeyDown="textCounter1(this.form.to2,this.form.countDisplayto2);" onKeyUp="textCounter1(this.form.to2,this.form.countDisplayto2);"><?php echo $to2p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplayto2" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content2</th>
          	 		
          	 	</tr>
          	  <tr>
                
                <td><textarea rows="4" cols="50"  name="co2" onKeyDown="textCounter3(this.form.co2,this.form.countDisplayco2);" onKeyUp="textCounter3(this.form.co2,this.form.countDisplayco2);"><?php echo $co2p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplayco2" size="3" maxlength="3" value="2000"> Characters Remaining</td> 

                

              </tr>
          	 		<tr>
          	 		
          	 		
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><a href="pic4.php" target="blank" >Bild hochladen4</a></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
      </div>

      <div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title3</th>
          	 		
          	 	</tr>
          	 	<tr>
                <td><textarea rows="1" cols="50" name="to3"  onKeyDown="textCounter1(this.form.to3,this.form.countDisplayto3);" onKeyUp="textCounter1(this.form.to3,this.form.countDisplayto3);"><?php echo $to3p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplayto3" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content3</th>
          	 		
          	 	</tr>
          	 	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co3" onKeyDown="textCounter3(this.form.co3,this.form.countDisplayco3);" onKeyUp="textCounter3(this.form.co3,this.form.countDisplayco3);"><?php echo $co3p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplayco3" size="3" maxlength="3" value="2000"> Characters Remaining</td> 

                

              </tr>
          	 		<tr>
          	 		
          	 		
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><a href="pic5.php" target="blank" >Bild hochladen5</a></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
                  <div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title4</th>
          	 		
          	 	</tr>
          	 <tr>
                <td><textarea rows="1" cols="50" name="to4"  onKeyDown="textCounter1(this.form.to4,this.form.countDisplayto4);" onKeyUp="textCounter1(this.form.to4,this.form.countDisplayto4);"><?php echo $to4p; ?> </textarea>
               <br>
                 <input readonly type="text" name="countDisplayto4" size="3" maxlength="3" value="50"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content4</th>
          	 		
          	 	</tr>
          	 	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co4" onKeyDown="textCounter3(this.form.co4,this.form.countDisplayco4);" onKeyUp="textCounter3(this.form.co4,this.form.countDisplayco4);"><?php echo $co4p; ?> </textarea>

                <br>
                 <input readonly type="text" name="countDisplayco4" size="3" maxlength="3" value="2000"> Characters Remaining</td> 

                

              </tr>
          	 		<tr>
          	 		
          	 		
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><a href="pic6.php" target="blank" >Bild hochladen6</a></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
      </div>
  		

<!--<h2  style="color:red;" >Preis</h2>

<div class="col-lg-3">

<h2 class="top_head" >Erwachsene</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td><input type="number" step=0.01 name="A1day" value="Eingeben Preis"> </input> <p id="demo1" ></p> </td> 

   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A1month" value="Eingeben Preis" >  </input><p id="demo2" ></p></td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A3month"  value="Eingeben Preis" ></input><p id="demo3" ></p></td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A6month"  value="Eingeben Preis" ></input><p id="demo4" ></p>  </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Ayear"  value="Eingeben Preis" ></input><p id="demo5" ></p>  </td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
	<h2 class="top_head" >Schüler</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S1day"  value="Eingeben Preis" ></input><p id="demo6" ></p>  </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S1month"  value="Eingeben Preis" ></input><p id="demo7" ></p> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S3month"  value="Eingeben Preis" ></input> <p id="demo8" ></p></td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S6month"  value="Eingeben Preis" ></input> <p id="demo9" ></p></td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Syear"  value="Eingeben Preis" ></input><p id="demo10" ></p> </td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
		<h2 class="top_head" >Kinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K1day"  value="Eingeben Preis" ></input><p id="demo11" ></p> </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K1month"  value="Eingeben Preis" ></input><p id="demo12" ></p> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K3month"  value="Eingeben Preis" ></input><p id="demo13" ></p> </td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K6month"  value="Eingeben Preis" ></input><p id="demo14" ></p> </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Kyear"  value="Eingeben Preis" ></input><p id="demo15" ></p> </td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
	
		<h2 class="top_head" >Familienkarte</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="F1day"  value="Eingeben Preis" ></input><p id="demo16" ></p> </td>
   </tr>

</table>	
	
<p><br></p>

<h2 class="top_head" >Kleinkinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="KK1day"  value="Eingeben Preis" ></input><p id="demo17" ></p> </td>
   </tr>

	

</table>	
	
</div>
</div>
</div>

<div class="col-lg-12">
	<h2 style="color:red;">Leihequipment</h2>
</div>

<div class="col-lg-6">


	
		<h2 class="top_head"  >Erwachsene</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>Leihschuhe</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EEL"  value="Eingeben Preis" ></input><p id="demo18" ></p> </td>
   </tr>
<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EEC"  value="Eingeben Preis" ></input><p id="demo19" ></p> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EEB"  value="Eingeben Preis" ></input><p id="demo20" ></p> </td>
   </tr>


	

</table>	
	
</div>
</div>

<div class="col-lg-6">

	
		<h2 class="top_head" >Kinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>Leihschuhe</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EKL"  value="Eingeben Preis" ></input> <p id="demo21" ></p></td>
   </tr>

<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EKC"  value="Eingeben Preis" ></input><p id="demo22" ></p> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EKB"  value="Eingeben Preis" ></input><p id="demo23" ></p> </td>
   </tr>

	

</table>	
	
</div>
</div>

</div>



<div>
  
<br>

-->
<h2  style="color:red;" >Preise</h2>

<br>

  <div  style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid;  overflow-x: scroll;   ">
 
  <table class="table table-bordered"  >
    <thead>
      <tr>
        <th>Eintritt (Mo-So & Feiertage)</th>
        <th>Preise </th>
        <th>Happy Hour (Mo-Fr Eintritt vor 16 Uhr)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Erwachsene</td>
        <td>
           <input type="number" step=0.01 name="A1day" value="<?php echo $a1dayp;?>" > 
          
        </td>
        <td>
          
           <input type="number" step=0.01 name="Ah1day" value="<?php echo $ah1dayp;?>" > 

        </td>
      </tr>
      <tr>
        <td>Sch&#502ler, Studenten, Senioren     </td>
        <td>
           <input type="number" step=0.01 name="S1day" value="<?php echo $s1dayp;?>"> 

        </td>
        <td>
           <input type="number" step=0.01 name="Sh1day" value="<?php echo $sh1dayp;?>"> 

        </td>
      </tr>
      <tr>
        <td>Kinder (unter 14 Jahre)</td>
        <td>
           <input type="number" step=0.01 name="K1day" value="<?php echo $k1dayp;?>"> 

        </td>
        <td>
           <input type="number" step=0.01 name="Kh1day" value="<?php echo $kh1dayp;?>"> 

        </td>
      </tr>
       <tr>
        <td>Kleinkinder (unter 4 Jahre)</td>
        <td>
           <input type="number" step=0.01 name="KK1day" value="<?php echo $kk1dayp; ?>"> 
        </td>
        <td>
           <input type="number" step=0.01 name="KKh1day" value="<?php echo $kkh1dayp; ?>"> 
        </td>
      </tr>
       <tr>
        <td>Familienkarte</td>
        <td>
          <input type="number" step=0.01 name="F1day" value="<?php echo $f1dayp; ?>"> 
        </td>
        <td>
            <input type="number" step=0.01 name="Fh1day" value="<?php echo $fh1dayp; ?>"> 

        </td>
      </tr>
    </tbody>
  </table>
</div>

<br>
<br>

  
<br>

<br>

<div  style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid; overflow-x: scroll; ">
 
  <table class="table  table-bordered"  >
    <thead>
      <tr>
        <th>Eintrittskarten Specials</th>
        <th>11er</th>
        <th>3-Monate</th>
        <th>Halbjahr</th>
        <th>Jahr</th>
        <th>Jahr mtl. Abo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Erwachsene</td>
        <td>
          <input type="number" step=0.01 name="A1month"  value="<?php echo $a1monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="A3month"  value="<?php echo $a3monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="A6month"  value="<?php echo $a6monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Ayear"  value="<?php echo $ayearp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Ayyear"  value="<?php echo $ayyearp; ?>" ></input>
        </td>
      </tr>
      <tr>
        <td>Sch&#502ler, Studenten, Senioren  </td>
        <td>
           <input type="number" step=0.01 name="S1month"  value="<?php echo $s1monthp; ?>" ></input>
        </td>
        <td>
         <input type="number" step=0.01 name="S3month"  value="<?php echo $s3monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="S6month"  value="<?php echo $s6monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Syear"  value="<?php echo $syearp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Syyear"  value="<?php echo $syyearp; ?>" ></input>
        </td>
      </tr>
      <tr>
        <td>Kinder (unter 14 Jahre)</td>
         <td>
            <input type="number" step=0.01 name="K1month"  value="<?php echo $k1monthp; ?>" ></input>
         </td>
        <td>
           <input type="number" step=0.01 name="K3month"  value="<?php echo $k3monthp; ?>" ></input>
        </td>
        <td>
         <input type="number" step=0.01 name="K6month"  value="<?php echo $k6monthp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Kyear"  value="<?php echo $kyearp; ?>" ></input>
        </td>
        <td>
           <input type="number" step=0.01 name="Kyyear"  value="<?php echo $kyyearp; ?>" ></input>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<br>
<br>
<div class="col-lg-12">
  <h2 style="color:red;">Leihequipment</h2>
</div>
<br>

<div  style="background-color: white; padding: 0px 0px 0px 0px; border-style: solid;  overflow-x: scroll;  ">
 
  <table class="table table-bordered"  >
    <thead>
      <tr>
        <th>Leihequipment</th>
        <th>Erwachsene</th>
        <th>Kinder</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Leihschuhe</td>
        <td> <input type="number" step=0.01 name="EEL"  value="<?php echo $eelp; ?>" ></input></td>
        <td> <input type="number" step=0.01 name="EKL"  value="<?php echo $eklp; ?>" ></input></td>
      </tr>
      <tr>
        <td>Chalkbags</td>
        <td> <input type="number" step=0.01 name="EEC"  value="<?php echo $eecp; ?>" ></input></td>
        <td> <input type="number" step=0.01 name="EKC"  value="<?php echo $ekcp; ?>" ></input></td>
      </tr>
      <tr>
        <td>B&#502rsten</td>
        <td> <input type="number" step=0.01 name="EEB"  value="<?php echo $eebp; ?>" ></input></td>
        <td>  <input type="number" step=0.01 name="EKB"  value="<?php echo $ekbp; ?>" ></input></td>
      </tr>
    </tbody>
  </table>
</div>


</div>






<br>
<br>






<div class="col-lg-12" style="text-align: center;">
<br>
<br>
<input name="update"  type="submit" value="Einreichen" >
</div>

 <?php


if (isset($_POST['update'])) {
  
$ts= $_POST['ts'];
$cs = $_POST['cs'];

$tf1 = $_POST['tf1'];
$tc1 = $_POST['tc1'];

$tf2= $_POST['tf2'];
$tc2= $_POST['tc2'];

$tf3 = $_POST['tf3'];
$tc3= $_POST['tc3'];


$to1 = $_POST['to1'];
$co1 = $_POST['co1'];

$to2 = $_POST['to2'];
$co2 = $_POST['co2'];


$to3= $_POST['to3'];
$co3 = $_POST['co3'];


$to4 = $_POST['to4'];
$co4 = $_POST['co4'];

$A1day = $_POST['A1day'];
$Ah1day = $_POST['Ah1day'];
$A1month=$_POST['A1month'];
$A3month = $_POST['A3month'];
$A6month=$_POST['A6month'];
$Ayear = $_POST['Ayear'];
$Ayyear = $_POST['Ayyear'];


$S1day = $_POST['S1day'];
$Sh1day = $_POST['Sh1day'];
$S1month=$_POST['S1month'];
$S3month = $_POST['S3month'];
$S6month=$_POST['S6month'];
$Syear = $_POST['Syear'];
$Syyear = $_POST['Syyear'];


$K1day = $_POST['K1day'];
$Kh1day = $_POST['Kh1day'];
$K1month=$_POST['K1month'];
$K3month = $_POST['K3month'];
$K6month=$_POST['K6month'];
$Kyear = $_POST['Kyear'];
$Kyyear = $_POST['Kyyear'];

$F1day = $_POST['F1day'];
$Fh1day = $_POST['Fh1day'];

$KK1day = $_POST['KK1day'];
$KKh1day = $_POST['KKh1day'];


$EEL = $_POST['EEL'];
$EEC = $_POST['EEC'];
$EEB = $_POST['EEB'];


$EKL = $_POST['EKL'];
$EKC = $_POST['EKC'];
$EKB = $_POST['EKB'];







$insert_update =" UPDATE main SET title='$ts',content='$cs',tf1='$tf1' ,tc1='$tc1',tf2='$tf2' , tc2= '$tc2' ,tf3='$tf3' ,tc3= '$tc3' ,to1='$to1',co1='$co1' ,to2='$to2' ,co2='$co2' ,to3= '$to3' ,co3='$co3' ,to4='$to4' ,co4='$co4' ,a1day='$A1day' ,ah1day ='$Ah1day', a1month='$A1month' ,a3month= '$A3month' ,a6month= '$A6month' , ayear ='$Ayear' , ayyear='$Ayyear', s1day='$S1day' , sh1day='$Sh1day',  s1month='$S1month' ,s3month ='$S3month' ,s6month= '$S6month' ,syear='$Syear' , syyear='$Syyear', k1day= '$K1day' , Kh1day='$Kh1day', k1month= '$K1month' ,k3month='$K3month' ,k6month= '$K6month' ,kyear = '$Kyear' , Kyyear='$Kyyear', f1day='$F1day' , fh1day='$Fh1day', kk1day='$KK1day', kkh1day='$KKh1day' ,eel= '$EEL' ,eec= '$EEC' ,eeb ='$EEB' ,ekl='$EKL' ,ekc= '$EKC' ,ekb='$EKB' ";

$run_insert_update= mysql_query( $insert_update, $conn);

if ($run_insert_update) {
  echo "<script>alert('Data has been added')</script>";
   echo "<script>window.open('index.php','_self')</script>";
}
else
{
  echo "Error: " . $insert_update . "<br>" . mysql_error($conn);
}

 

}







 
  }



?>







</div>

</form>
</div>
  
</div>
  
</div>
</div>





</body>
</html>


