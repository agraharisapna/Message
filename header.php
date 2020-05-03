<?php

	session_start();
	//error_reporting(0)
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged In</title>
 
	<?php include 'requirement.php'; ?>

</head>
<body>

    <div class="container">
	    <h1>Robin's Nest</h1>

    </div>

    <h3 style="margin-top: 0px">Logged in as :</h3>

    <div class="container">
	    <div class ="row justify-content-center" style="height:40px;">
   
   	        <!-- <div class=""> -->
                <button type="button" id="header" class="btn btn-primary"><i class="fa fa-home"> </i> Home </button>
            <!-- </div> -->


	        <!-- <div class="mr-3 ml-3"> -->
                <button type="button" class="btn btn-primary mr-3 ml-3" id="member"><i class="fa fa-users" aria-hidden="true"></i>
 Members</button>	
            <!-- </div> -->


	        <!-- <div class=""> -->
                <button type="button" id="friends" class="btn btn-primary"><i class="fa fa-heart" aria-hidden="true"> </i> Friends </button>	</div>
            <!-- </div> -->
	

	        <div class="row justify-content-center mt-3" style="height:40px;">
		        <!-- <div cass="" id="msg"> -->
			        <button type="button" class="btn btn-primary" id="msg" name="massege"><i class="fa fa-envelope-open" aria-hidden="true"> </i> Messages </button>
				<!-- </div> -->

		        <!-- <div class="ml-3 mr-3" id="pedit"> -->
			        <button  type="button" class="btn btn-primary mr-3 ml-3" id="pedit" name="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit Profile </button>
		        <!-- </div> -->

		        <!-- <div class="" onclick="logoutfun()"> -->
			        <button id="logoutfun" type="button" class="btn btn-primary"><i class="fa fa-power-off" aria-hidden="true"></i>
 Log Out</button>
		        <!-- </div> -->
	        </div>
        </div>


<script>

	$('#logoutfun').click(function(){
		window.location.href = 'logout.php';
	});

	$('#header').click(function(){
		window.location.href = 'header.php';
	});

	$('#friends').click(function(){
		window.location.href = 'friends.php';
	});

	$('#member').click(function(){
		window.location.href = 'member.php';
	});

	$("button[name='edit']").click(function(){
		window.location.href = 'edit.php';
	});

	$("button[name='massege']").click(function(){
		window.location.href = 'massege.php';
	});

</script>
