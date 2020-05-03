<?php
	include 'connect.php';
	session_start();
	error_reporting(0);
    
	if(isset($_POST['submit']) && isset($_POST['detail']) && isset($_POST['image']))
	{
		$msg=$_POST['detail'];
		$imag=$_POST['image'];
		$user = $_SESSION['id'];

		$sql="INSERT INTO details(id, msg,image) VALUES ('$user','$msg','$imag')";

		mysqli_query($conn,$sql);

		if(mysqli_affected_rows($conn))
		{
			echo "updated successfully";

		}
		else
		{
			echo "Something went wrong";
	
		}

		mysqli_close($conn);	
}
?>