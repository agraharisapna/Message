<?php
	session_start();
	error_reporting(0);
	if($_SESSION['logged_in'] != true){
		header('location:index.php');
	}
	include "phpfunction/edit_fun.php";
	include 'header.php';
	
?>

	<form action="#" method="POST" id="form" style="margin: 200px 0px 10px 50px;">
		<h5 ><strong>Your Profile</strong></h5>

		<img src="images/clip.jpg" alt="profile"/>  Hi, I'm Robin welcome to my 'nest'.<br><br>

		<h5 ><strong>Enter or edit your details and/ or upload an Image</h5></strong>

		<div class="form-group">
    		<input type="text" name="detail" class="form-control" id="email" style="width: 50%" placeholder="Hi, I'm Robin welcome to my 'nest'."><br>

   			<label for="email">Image:</label>

   			<input type="file" name="image" class="form-control" id="file" style="width: 50%" ><br>

   			<input type="submit" name="submit" value="Save Profile" style ="width:50%" id="save">

		</div>

	</form>

<!--message-->

</body>
</html>
