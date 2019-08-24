<?php

	$con = mysqli_connect('localhost','root','','smartcity');

	if(mysqli_connect_error($con))
	{
		echo "Failed to connect to MySQL".mysqli_connect_error();
	}

?>
