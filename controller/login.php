<?php 
	session_start();
	include('../model/class.db.php');
	if (isset($_POST['submit']) && $_POST['submit'] == 'Login') {
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		$db = new db();
		
		$query = "SELECT * FROM user WHERE 	email = '$email' and `password` = '$password'";
		$result = $db->fetch_result($query);
		$count = sizeof($result);
		print_r($count);
		if ($count == 0) {
			echo"You need to registation fist";
			header('Location:../user/login.php');
		}
		else {
			$_SESSION['status'] = 1;
			// echo"ok";
			header('Location:../index.php');

		}
	}
 ?>