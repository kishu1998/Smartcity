<?php 

session_start();
include('db.php');

	include('include/sendmailbasic.php');


	//This is the directory where images will be saved


	

	
    //Writes the Filename to the server
$password1=mt_rand(100000,999999);
$email_id=$_POST["cp_email"];

	$subject='welcome to smartcity';
	$body='your password is '.$password1;
 	$query="INSERT INTO corporator values('$_POST[cp_name]','$password1','$_POST[cp_email]','$_POST[cp_mobno]','$_POST[cp_location]','$_POST[cp_pin]' )";

	if(mysqli_query($con,$query))
	{
			$message = "new corporator has been added succesfully!";
			echo "<script>alert($message);</script>";
			//email_std($email_id,$subject,$body);
			
			header('Refresh:0;url=addcorporator.php');
	}
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
		else
			echo "Error in inserting data:".mysqli_error($con);
	}

?>
