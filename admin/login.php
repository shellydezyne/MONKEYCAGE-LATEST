<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

<div class="login">
	<h1>MonkeyCage <br> Admin Panel</h1>
    <form method="post" action="">
    	<input type="text" name="email" placeholder="Username" required="required" />
        <input type="password" name="pass" placeholder="Password" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>

</body>
<?php

include("db.php");
if (isset($_POST['submit'])) {
	
	$email = mysql_real_escape_string($_POST['email'], $conn);
	$pass = mysql_real_escape_string($_POST['pass'], $conn);

	$sel_user = "SELECT * FROM admin WHERE user_email='$email' and user_pass='$pass'";
	$run_sel_user = mysql_query( $sel_user, $conn);
	$check_user = mysql_num_rows($run_sel_user);

	if($run_sel_user != false){

	if ($check_user == 0) {
		
		echo "<script>alert('Email or password is wrong')</script>";
	}
	else
	{
		$_SESSION['user_email']=$email;

		echo "<script>window.open('index.php?logged_in=You are successfully logged In !','_self')</script>";
	}
}
}
?>
</html>

