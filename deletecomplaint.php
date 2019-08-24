<?php
session_start();
include('include/db.php');


$id=$_GET['info1'];

$query="delete   from user where id='$id' ";

if(mysqli_query($con,$query))
{


header('Refresh:0;url=previouscomm.php');

}

?>