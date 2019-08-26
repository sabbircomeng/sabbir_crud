<?php include "db.php";?>
<?php
$db = new dbConnection();	
$name=$mobile='';
if (isset($_POST['submit'])) {
if ($_POST['submit']=='save') {
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
}	$db->insertData($name,$mobile);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>This is crud action</title>
</head>
<body>

	<div style="text-align: center;">
		<form action="" method="post">
			<input type="text" name="name" placeholder="Enter your name"><br><br>
			<input type="text" name="mobile" placeholder="Enter your number"><br><br>
			<input type="submit" name="submit" value="save">
		</form>
	</div>


	<div>
		<h1><?php $db->readData(); ?></h1>
	</div>

</body>
</html>