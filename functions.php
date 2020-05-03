<?php
		
	include 'connect.php';
	session_start();
	error_reporting(0);


if(isset($_POST['submit'])&& isset($_POST['name'])&& isset($_POST['password']) && isset($_POST['cpassword']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$c_pass=$_POST['cpassword'];

	$sq= "SELECT * FROM user_input WHERE username='$name'";
	$res= mysqli_query($conn,$sq);

	if(mysqli_num_rows($res)>0)
	{
		echo "Userid already exist";
	}	
	else{
		if($password == $c_pass){
			$sql="INSERT INTO user_input(username,password,c_pass) VALUES ('$name','$password','$c_pass')";

			if (mysqli_query($conn,$sql))
			{
				echo "Added successfully";

			}
			else
			{
				echo "Something went wrong";
			}


		}
		else{
			echo "\nPassword and confirm password does not match";
		}
	}

}

if(isset($_POST['submit']) && isset($_POST['fname']) && isset($_POST['fpassword']))
{
	$user=$_POST['fname'];
	$passw=$_POST['fpassword'];

	$sq= "SELECT * FROM user_input WHERE username='$user' AND password='$passw'";
	$res= mysqli_query($conn,$sq);

	if(mysqli_num_rows($res)>0)
	{
		while($row = mysqli_fetch_array($res)){
			$_SESSION['id'] = $row['id'];
		}
		$_SESSION['logged_in']= true;
		echo $_SESSION['id'];
		echo $_SESSION['logged_in'];
		 header('Location: edit.php');

	}
	else{

		echo "\nInvalid username or password";
	}

			
	mysqli_close($conn);	
}

?>