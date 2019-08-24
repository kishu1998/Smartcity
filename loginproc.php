<?php
session_start(); 
include('db.php');

	
   $pwd=$_POST["password"];
   $email=$_POST["email"];
   $_SESSION['email']=$email;
	
$flag=0;
   
   if($email=='admin@gmail.com' && $pwd=='admin')
   {
   			$_SESSION['logged_in']=true;
			header('Refresh:0;url=addcorporator.php');
   		
   }
   else
   {
		$query="select * from login_details where email_id='$email'";
		$res=mysqli_query($con,$query);
		if($row2=mysqli_fetch_array($res))
		{
			 

			if(password_verify($pwd,$row2['password']))
			{
				$_SESSION['logged_in']=true;
				header('Refresh:0;url=addcomplaint.php');
			} 
			else
			{
				$message = "invalid password ";
				echo "<script>alert('$message');</script>";
				header('Refresh:0;url=login.php');
			}
	
		}
		else
		{
			$query1="select * from corporator where cp_email='$email'";
			$res1=mysqli_query($con,$query1);
			if($row1=mysqli_fetch_array($res1))
			{
				if($row1['cp_password']==$pwd)
				{
					$_SESSION['cp_pin']=$row1['cp_pin'];
					$_SESSION['logged_in']=true;
					header('Refresh:0;url=corporator.php');
				}
				else 
				{
					$message = "invalid password ";
					echo "<script>alert('$message');</script>";
					header('url=login.php');
				}
			}
			else
			{
				$message = "invalid input ";
				echo "<script>alert('$message');</script>";
				header('Refresh:0;url=login.php');
			}
		}
	} 
?>