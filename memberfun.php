<?php
	
	include 'connect.php';
	session_start();
	error_reporting(0);
	$id = $_SESSION['id'];
	

	if(isset($_POST['id1'])){
		$id1 = $_POST['id1'];
		
		$info = array();

		$q = "select * from user_input where id='$id1'";

		$res = mysqli_query($conn, $q);

		if(mysqli_num_rows($res) >= 1){
		
		while($row = mysqli_fetch_array($res)){
			$info[0] = $row[1];
			$info[1] = $row[2];
			
		}
		echo json_encode($info);
	}

		return;
	}

	$drop = array();
	$follower = array();

	$q = "select * from user_input where id != '$id'";
	$q2 = "select follower from friends where follow = '$id'";
	$q3 = "select f2.follow as foll from friends as f2 where f2.follow in (select f1.follower from friends as f1 where f1.follow='$id')";




	$res = mysqli_query($conn, $q);
	$res2 = mysqli_query($conn, $q2);
	$res3 = mysqli_query($conn, $q3);	

	if(mysqli_num_rows($res3) >= 1){
		$i = 0;
		while($row = mysqli_fetch_array($res3)){
			$drop[$i] = $row['foll'];
			$i++;
		}
	}


	if(mysqli_num_rows($res2) >= 1){
		$i = 0;
		while($row = mysqli_fetch_array($res2)){
			$follower[$i] = $row['follower'];
			$i++;
		}
	}	


	if(mysqli_num_rows($res) >= 1){
		while($row = mysqli_fetch_array($res)){
			if(in_array($row['id'], $drop)){
				echo '<li data-toggle="modal" data-target="#exampleModalLong" value='.$row['id'].'>'.$row['username'].' <-->is a mutual friend   <a href="">[drop]</a></li>';
			}
			elseif(in_array($row['id'], $follower)){
				echo '<li data-toggle="modal" data-target="#exampleModalLong" value='.$row['id'].'>'.$row['username'].' <-- is following you  <a href="">  [follower]</a></li>';
			}
			else{
				echo '<li data-toggle="modal" data-target="#exampleModalLong" value='.$row['id'].'>'.$row['username'].'   <a href=""></a></li>';
			}
			
		}
	}



	

?>
