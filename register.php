<?php

include('include/db.php');
include('sendmailbasic.php');

$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pass1'];

$password= password_hash($pwd,PASSWORD_BCRYPT);

$query="insert into login_details values ('$name','$password','$email')";

//$result1=mysqli_query($con,$query);


	
	$subject='welcome to smart city';
	$body='thanks for registration';

if(mysqli_query($con,$query))
	{
		$message = "registered succesfully!";
		echo "<script>alert('$message');</script>;";
		email_std($email,$subject,$body);
		header('Refresh:0;url=login.php');
	}
else
	{

		
		$x = mysqli_error($con);
		$pattern="/^Duplicate entry.*'PRIMARY'$/";
		if(preg_match($pattern,$x))
		{
			echo "<script>alert('Email-id is already registered!')</script>";
			echo '<script>window.history.back();</script>';
		}
		else
		{
			echo "error";
		}

}

?>