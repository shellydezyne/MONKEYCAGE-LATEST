<html>
<head>
<script> 
var maxAmount = 250;
function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
        textField.value = textField.value.substring(0, maxAmount);
	} else { 
        showCountField.value = maxAmount - textField.value.length;
	}
}
</script>
</head>
<body>
<form method="post" action="">
<textarea name="ta" rows="6" style="width:340px;" onKeyDown="textCounter(this.form.ta,this.form.countDisplay);" onKeyUp="textCounter(this.form.ta,this.form.countDisplay);"></textarea>
<br>
<input readonly type="text" name="countDisplay" size="3" maxlength="3" value="10"> Characters Remaining

<textarea name="na" rows="6" style="width:340px;" onKeyDown="textCounter(this.form.na,this.form.countDisplay1);" onKeyUp="textCounter(this.form.na,this.form.countDisplay1);"></textarea>
<br>
<input readonly type="text" name="countDisplay1" size="3" maxlength="3" value="20"> Characters Remaining


<input type="submit" name="update" value="submit">

</form>
<?php

if (isset($_POST['update'])) {
	
	$ta = $_POST['ta'];
	$pa = $_POST['na'];

	echo $ta . $pa;
}

?>
</body>
</html>