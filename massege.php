<?php
	session_start();
	error_reporting(0);
	if($_SESSION['logged_in'] != true){
		header('location:index.php');
	}
	include "phpfunction/edit_fun.php";
	include 'header.php';
?>

<form action="#" method="POST" id="msg-form" style="margin: 200px 0px 10px 50px;">
		<h5 ><strong>Your Profile</strong></h5>

		<img src="images/clip.jpg" alt="profile"/>  Hi, I'm Robin welcome to my 'nest'.<br><br>
		
		<h5 >Type here to leave a message </h5>
	
		<input type="button" value="Public" id="save">

		<input type="button" value="Private" id="save">

		<div class="form-group">

    		<input type="text" name="msg"  id="message" style="width: 60%"><br>


    	
   			<input type="submit" name="post" value="Post Messages" style ="width:60%"  id="save"><br>
    		

			<input type="submit" name="submit" value="Refresh Messages" style ="width:60%"  id="save" >

		</div>
	</form>

</body>
</html>

