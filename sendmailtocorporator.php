<?php

session_start();
include('include/db.php');
	include('sendmailbasic.php');
	$pin=$_SESSION['pincode'];
	$complaint=$_SESSION['complaint'];
	$query="select cp_email from corporator where cp_pin='$pin' ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);

{$email_id=$row['cp_email'];
	$subject='welcome to smartcity';
	$body="the complaint of".$complaint." in your location  ".$pin." has not yet been solved .solve shortly otherwise action will be taken on you";
	email_std($email_id,$subject,$body);
	
	echo"<script>alert('Email has been sent to respective Corporator')</script>";
	header('Refresh:0;url=pending.php');
}
?>