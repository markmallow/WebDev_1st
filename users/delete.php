<?php
 require('database.php');
 if (isset($_POST["btnDelete"])) {
 	$deleteID = $_POST["id"];
 	$query = "DELETE FROM `accounts` WHERE `ID` = '$deleteID'";
 	$sql = mysqli_query($con, $query);
 	echo '<script> alert ("successfully deleted!") </script>';
	echo '<script> window.location.href="users.php" </script>';
 }else
?>