<?php session_start();
	if (isset($_POST["btnSignUp"]))
	{
		$name = $_POST["txtName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$contactnumber = $_POST["txtContactNo"];
		
		$con = mysqli_connect("localhost","root","","unique","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "INSERT INTO `user` (`email`, `name`, `password`, `contactno`) VALUES ('".$email."', '".$name."', '".$password."', '".$contactnumber."');";
		
		
		mysqli_query($con, $sql);
		
		header('Location: sign up.php');
	}
?>