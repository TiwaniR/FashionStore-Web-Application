<?php session_start();
	if (isset($_POST["btnSubmit"]))
	{
		$username = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		
		$con = mysqli_connect("localhost","root","","unique","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "SELECT `role` FROM `user` WHERE `email`='".$username."' AND `password`='".$password."'";
		
		$result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
		
		if ($row["role"] == "admin")
		{	
             $_SESSION["admin"] = $username;
             header("Location: AdminAccount.php");
		}
		else if($row["role"] == "customer")
		{  
			$_SESSION["username"] = $username;
            header("Location: CustomerAccount.php");
		}
        else
        {
            header('Location: sign up.php');
        }
	}
?>
