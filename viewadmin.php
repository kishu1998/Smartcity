
<?php

session_start();

if(isset($_SESSION['logged_in']))
{
	include('include/db.php');
$id=$_GET['info1'];
$query="select * from user where id='$id' ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$_SESSION['id']=$row['id'];
$_SESSION['pincode']=$row['ur_pincode'];
$_SESSION['complaint']=$row['ur_complaint'];
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>

     <meta charset="UTF-8" />
    <title>complaint details</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />

    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
      <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
-      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >


     <!-- MAIN WRAPPER -->
  


      <?php
          include('include/dashboard.php');
      ?>
            <div id="left">
            <div class="media user-media well-small">
               
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Admin</h5>
                   
                </div>
                <br />
            </div>
<ul  id="menu" class="collapse">

             <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i>details
     
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="addcorporator.php"><i class="icon-angle-right"></i>Add corporator  </a></li>
                        <li class=""><a href="listcorporator.php"><i class="icon-angle-right"></i>view/edit corporator </a></li>
                        <li class=""><a href="pending.php"><i class="icon-angle-right"></i> pending complaints</a></li>
                         <li class=""><a href="logout.php"><i class="icon-angle-right"></i> Logout </a></li>
                   </ul>
                </li>
</ul>
</div>
        <!--PAGE CONTENT -->
        


        <div id="content">
          <div class="inner">
           
                
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h3> view</h3>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
					<div class="col-lg-1"></div>
                        <div class="col-lg-12">
                           
                               
                                
                                    <form action="sendmailtocorporator.php" method="POST" class="form-horizontal" id="block-validate" enctype="multipart/form-data">

                        
                                     
                                
											<div class="col-lg-8">
											<img style="height:200px;width:150px;" src="<?php echo($row['ur_image']);?>"></img>
											    <div class="form-group">
											 <div class="form-group">
                                            
                                                <label class="control-label ">DESCRIPTION</label>
                                                <div >
                                 <input type="text"  id="required2" name="cp_name" value="<?php echo($row['ur_discription']);?>"class="form-control" disabled/>
                                                </div>
                                            
                                                <label class="control-label ">LOCATION</label>
                                                <div >
                                 <input type="text"  id="required2" name="cp_name" value="<?php echo($row['ur_location']);?>"class="form-control" disabled/>
                                                </div>

 											
									
										
                                     
                                            
                                                <label class="control-label ">PINCODE</label>
                                                <div >
                                                    <input type="text"  id="required2" value="<?php echo($row['ur_pincode']);?>" name="cp_mobno" class="form-control" disabled/>
                                                </div>

                                       
                                       
                                                                                
                                            
                                                <label class="control-label ">USERS FEEDBACK</label>
                                                <div >
                                                    <input type="text"  id="required2" value="<?php echo($row['response']);?>" name="cp_mobno" class="form-control" disabled/>
                                                </div>

                                       
                                        
                                      </div>
                                        <br>
                                        
                                            <input type="submit" value="MESSAGE TO CORPORATOR"btn btn-primary btn-lg " />
                                       </div>

                                    </form>
                                
                           
                        </div>
                    </div>

</div>

</div>



   <!--END PAGE CONTENT -->



    

     <!--END MAIN WRAPPER -->



    <!-- PAGE LEVEL SCRIPTS -->

 <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
         

    <!--END PAGE LEVEL SCRIPTS -->
</body>
    <!-- END BODY-->

</html>
<?php 
}
else
{
  header('Refresh:0;url=login.php');
}
?>
