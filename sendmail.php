<?php

session_start();
	include('sendmailbasic.php');
	$email_id=$_SESSION['email1'];
	$subject='welcome to smartcity';
	$body='your complaint will be will be solved';
	email_std($email_id,$subject,$body);
	
	echo"<script>alert('Email has been sent to citizen')</script>";
	header('Refresh:0;url=corporator.php');
?>