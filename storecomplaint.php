<?php 

session_start();
include('db.php');


	//This is the directory where images will be saved
    $target = "images/";
	
	 $target = $target . $_POST['ur_discription'].'.jpg';

	

	
    //Writes the Filename to the server
    move_uploaded_file($_FILES['ur_image']['tmp_name'], $target);

 	$query="INSERT INTO user (ur_location,ur_pincode,ur_image,ur_complaint,ur_email_id,ur_discription,response) values
				('$_POST[ur_location]','$_POST[ur_pincode]','$target','$_POST[ur_complaint]','$_SESSION[email]','$_POST[ur_discription]','')";

	if(mysqli_query($con,$query))
	{
			$message = "complaint registered succesfully!";	
			echo "<script>alert('$message');</script>";
			header('Refresh:0;url=addcomplaint.php');
	}
	else
	{
			echo "Error in inserting data:".mysqli_error($con);
	}

?>
