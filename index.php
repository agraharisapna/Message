<?php

	error_reporting(0);
	session_start();
	include 'phpfunction/functions.php';

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chatting!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<a href="edit.html"></a>

	<script src="js/index.js"></script>
	<script src="js/edit.js"></script>

</head>
	
<body>

	<div class="container">
		<h1>Robin's Nest</h1>

	</div>

	<h3>Welcome Guest</h3>

	<div class="wrapper">
	
		<button class="btn" id="someid"><i class="fa fa-home"></i> Home</button>
		
		<button class="btn" id="Mybtn" ><i class="fa fa-plus"></i>
</i> Sign Up</button>

		<button class="btn" id="btn1"><i class="fa fa-check"> 
</i> Login</button>

	</div>


	<form id="MyForm" action="#" method= "POST">
	
		<h4>PLease enter your details to SignUp</h4>
 			Username : <input type="label" name="name" value="" autocomplete="off" required><br><br>
 		
			Password : <input type="password" name="password"><br><br>

 			Re-Enter pass : <input type="password" name="cpassword" autocomplete="off"><br><br>
 		
 			<button type="Submit" name="submit">submit</button>	
 	</form>
 



	<form id="Forms" action ="#" method="POST">
		<h4>Please enter your details to Log in</h4>

 		Username : <input type="label" name="fname" autocomplete="off"><br><br>
 		
		 Password : <input type="Password" name="fpassword"><br><br>
 		
 		<button type ="Submit" name="submit">submit</button>	
 	</form>



	<div class="container">
		<h4><i>(You must be Logged In to use this App)</i></h4>
		
		<h4>Welcome to Robin's Nest , Please SignUp or Log in</h4>
	</div>

	<div class ="container">
		<h4>Web App from Learn <i><u style="color: blue;"> Learning PHP MySql & JavaScript Ed.5</i></u></h4>
	</div>

</body>
</html>


<script >
document.getElementById("someid").onclick = function () {
    window.location.hash = "#index.php";
};
</script>
