<!--
Here, we write code for registration.
-->
<?php
	require_once('connection.php');
	$YS = $id = $username = $password = $pwd = '';

	$YS = $_POST['YS'];
	$id = $_POST['id'];
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);

	$sql = "INSERT INTO register1 (YS,id,username,Password) VALUES ('$YS','$id','$username','$password')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: homealone.php");
	}

	else	{
	echo "Error :".$sql;
	}
?>