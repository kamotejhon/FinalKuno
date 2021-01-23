<!--
Here, we write code for login.
-->
<?php
	require_once('connection.php');
	$username = $password = $pwd = '';

	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$password = md5($pwd);
	$sql = "SELECT * from register1 where username='$username' and Password='$password'";
	$result = mysqli_query($conn, $sql);
	
		if(mysqli_num_rows($result) > 0){
	
			while($row = mysqli_fetch_assoc($result)){
		
				$id = $row["id"];
				$username = $row["username"];
				session_start();
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
			}
			header("Location: home.php");
		}
		else{
	
			echo "Invalid username or password";
		}
?>