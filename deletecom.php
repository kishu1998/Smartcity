<?php
session_start();
include('include/db.php');


$id=$_SESSION['id'];

$query="update user set response='$_POST[response]' where id='$id' ";

if(mysqli_query($con,$query))
{


header('Refresh:0;url=previouscomm.php');

}

?>