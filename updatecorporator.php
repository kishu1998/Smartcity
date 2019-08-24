<?php 
session_start();

	include('include/db.php');
$email=$_SESSION['cp_email'];
$query="update corporator set cp_pin='$_POST[cp_pin]' cp_location='$_POST[cp_location]',cp_name='$_POST[cp_name]',cp_mobno='$_POST[cp_mobno]',
cp_email='$_POST[cp_email]' where cp_email='$email' ";
if(mysqli_query($con,$query)) 
  header('Refresh:0;url=listcorporator.php');
else
{
	$x = mysqli_error($con);
		$pattern="/^Duplicate entry.*'PRIMARY'$/";
		//echo "Error in inserting data:".mysqli_error($con);
		if(preg_match($pattern,$x))
		{
			echo "<script>alert('Email-id is already registered!')</script>";
			echo '<script>window.history.back();</script>';
		}
		
	}
?>