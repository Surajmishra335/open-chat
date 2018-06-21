<?php 

include 'database.php';

//check if form submitted
if(isset($_POST['submit'])){
	$user=mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	


	//set timezone
	date_default_timezone_set('Asia/Calcutta');
	$time=date('h:i:s a',time());

	//validate input
	if(!isset($user) || $user=='' || !isset($message) || $message==''){
		$error = "please fill in your name and message";
		header("location: index.php?error=".urlencode($error));
		exit();
		

	} else{
		$query = "INSERT INTO shout (user, message, time)
		VALUE ('$user' , '$message' , '$time')";
		
		if (!mysqli_query($con,$query)) {
			die('error: ' .mysqli_error($con));
		}else{
			header("location: index.php");
			exit();
		}
	}

}

