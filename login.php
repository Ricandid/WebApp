<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type = "text/css" href = "style.css">	
</head>
<body>

<form method="post", action="#">

		<center>
		<h1>LOG-IN</h1>
		</div>
		<div>
		<input type="number", name="username", placeholder="Enter username"/><br>
		<input type="password", name="password", placeholder="Enter password"/><br>
		<input type="submit", name="submit", value="Submit"/>
		</center>
		</div>
</form>

<?php
	$c = oci_connect("hr", "hr", "localhost/XE");
		if (!$c) {
			$e = oci_error();
			trigger_error('Could not connect to database: ' . $e['message'], E_USER_ERROR);
		}
	
		if (isset($_POST ['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
		$s = oci_parse($c, "select * from employees where Employee_ID='".$username."' AND Email='".$password."'");
		$exec = oci_execute($s);
		$fetcharr = oci_fetch_array($s);
		$chk = oci_num_rows($s);
		echo $chk;
		while (($row = oci_fetch_array($s, OCI_ASSOC + OCI_RETURN_NULLS)) != FALSE){
		}
		if ($chk == 0) {
			echo "<center>YOUR USERNAME AND PASSWORD DO NOT MATCH!</center>";
		} else {	
			header("Location: anyco.php");
		}
	}
?>
</body>
</html>
