<?php 
	require('database.php');
	if(isset($_POST['btnSubmit'])){
		$firstname = $_POST['txtFname'];
		$lastname = $_POST['txtLname'];
        $email = $_POST['txtEmail'];
        $contact = $_POST['txtContact'];
        $password = $_POST['txtPassword'];
		$query = "INSERT INTO `accounts` (`firstname`, `lastname`, `email`, `contact`, `password`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$password')";
		$sql = mysqli_query($con, $query);
		echo '<script> alert ("successfully created!") </script>';
		echo '<script> window.location.href="users.php" </script>';
	}else{
		echo '<script> window.location.href="users.php" </script>';
	}
?>