<?php
	session_start();
	error_reporting(0);

	if($_SESSION['logged_in'] != true){
		header('location:index.php');
	}

	include "phpfunction/edit_fun.php";
	include 'header.php';


	$drop = array();
	$follower = array();

	//$q = "select * from user_input where id != '$id'";
	$q2 = "select username from user_input where id in (select follower from friends where follow = '$id')";
	$q3 = "select username from user_input where id in (select f2.follow from friends as f2 where f2.follow in (select f1.follower from friends as f1 where f1.follow='$id'))";




	//$res = mysqli_query($conn, $q);
	$res2 = mysqli_query($conn, $q2);
	$res3 = mysqli_query($conn, $q3);	



	if(mysqli_num_rows($res3) >= 1){
		$i = 0;
		while($row = mysqli_fetch_array($res3)){
			$drop[$i] = $row['username'];
			$i++;
		}
	}


	if(mysqli_num_rows($res2) >= 1){
		$i = 0;
		while($row = mysqli_fetch_array($res2)){
			$follower[$i] = $row['username'];
			$i++;
		}
	}	
		
?>



<!--<h5 style="margin-top: 250px">Your mutual friend are :</h5>
<ul id="mutualf">

<?php

	
//foreach ($drop as $key => $d) {

$keys = array_keys($drop);
$arraySize = count($drop);
for($i=0;$i< $arraySize;$i++)
{

	echo $keys[$i];
	

}
# code...


?>
	
</ul>-->
 for ($i=0;$i<4;$i++
 {
 	
 })

<h5>Your followers are </h5>
<ul>
	
<?php
	
foreach ($follower as $key => $f) {
	echo $follower;
	# code...
}

?>
</ul>


</body>
</html>



