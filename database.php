<?php
	//conntect to mysql

	$con = mysqli_connect("localhost","root","0880", "shoutit");

	//test connection
	if(mysqli_connect_errno() ) {
		echo 'faild to connect' .mysqli_connect_error();
	}