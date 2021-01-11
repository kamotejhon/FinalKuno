<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","salacup123","company");

if(!$conn)
{
	echo "Database connection faild...";
}
?>