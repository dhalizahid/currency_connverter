<?php 
	session_start();
	include("../model/class.db.php");
	if (isset($_POST['submit']) && ($_POST['submit']== 'Send Data')) {
		$frist_name 	  = $_POST['frist_name'];
		$last_name		  = $_POST['last_name'];
		$phone_no		  = $_POST['phone_no'];
		$email  		  = $_POST['email'];
		$password 		  = md5($_POST['password']);
		$confirm_password = md5($_POST['confirm_password']);

		 if (empty($frist_name) ||empty($last_name) ||empty($phone_no) || empty($email) ||  empty($password)  ||  empty($confirm_password)) {
            echo "Error ! You must input all filds.";
        }
		else{
			if ($password != $confirm_password) {
				echo "Error ! password dosn't match";
			}
			else{
				$db = new db();
				$query = "SELECT * FROM user WHERE email= '$email'";
				$result = $db->exceute($query);
				$count  = mysqli_num_rows($result);
				if ($count > 0) {
					echo"This Email already register!";
				}
				$query = "INSERT INTO user(frist_name,last_name,phone,email,`password`)";
				$query .= "VALUES('$frist_name','$last_name',$phone_no ,'$email','$password')";
				$db = new db();
				$result = $db->exceute($query);
				if (!$result) {
					echo "data insert faild";
				}
				else{
					$_SESSION['status'] = 1;
					header("Location:../views/login.php");
				}
			}
		}
	}
 ?>