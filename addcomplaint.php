
<?php

session_start();

if(isset($_SESSION['logged_in']))
{
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>

     <meta charset="UTF-8" />
    <title> Information</title>
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
	
    <style>
       #map {
        height: 300px;
        width: 100%;
       }
    </style>
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
                    <h5 class="media-heading"> <?php echo $_SESSION["email"]; ?></h5>
                   
                </div>
                <br />
            </div>
<ul  id="menu" class="collapse">

             <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i>list
     
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="form-nav">
					
                        <li class=""><a href="addcomplaint.php"><i class="icon-angle-right"></i> Add Complaints  </a></li>
                        <li class=""><a href="previouscomm.php"><i class="icon-angle-right"></i> previous  </a></li>
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
                            
                               
                                    <h1 >Citizens Home Page</h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
					  <form action="storecomplaint.php" method="POST" class="form-horizontal" id="block-validate" enctype="multipart/form-data">
                        <div class="col-lg-12">
                           
                               
                                
                                  

                        
                                     <div class="fileupload fileupload-new" data-provides="fileupload">
                                         <label> Images <span style="color: red";> *</span></label><br>
                                         <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                         <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                         <div>
                                             <span class="btn btn-file btn-primary"><span class="fileupload-new">Pick-Images</span><span class="fileupload-exists">Change</span><input type="file" name="ur_image" /></span>
                                             <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                         </div>
                                     </div>
                                
											<div class="col-lg-8">

 											<div class="form-group">
      

                          <label class="control-label ">complaint</label>
                          <div >
                              <select name="ur_complaint" id="" class="form-control">
          													<option value=" " ><----type of complaint--></option>
          													<option value="water" >water</option>
          													<option value="road hole">road hole</option>
          													<option value="garbage">garbage</option>
          													<option value="electricity">electricity</option>
          												   <option value="other">other</option>
												    	</select>
                         </div>

                                       
                                        </div>

                              <div class="form-group">
                                            
                                                <label class="control-label ">Email-Id</label>
                                                <div >
                                                    <input type="text"  id="required2" value="<?php echo($_SESSION['email'])  ?>" class="form-control" disabled/>
                                                </div>

                                       
                                        </div>
										
                                        <div class="form-group">
                                            
                                                <label class="control-label ">description</label>
                                                <div >
                                                    <input type="text"  id="required2" name="ur_discription" class="form-control"/>
                                                </div>

                                       
                                        </div>
										 <div class="form-group">
                                            
                                                <label class="control-label ">Pin</label>
                                                <div >
                                                    <input type="text"  id="required2" name="ur_pincode" class="form-control"/>
                                                </div>

                                       
                                        </div>
										
                                        <div class="form-group">
                                            
                                                <label class="control-label ">location</label>
                                                <div >
                                                    <input type="text"  id="required2" name="ur_location" class="form-control"/>
                                                </div>

                                       
                                        </div>


                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="submit" class="btn btn-primary btn-lg " />
                                        </div>
</div>
                                    
                                </div>
                           
                      </form>
                    </div>

</div>

</div>



   <!--END PAGE CONTENT -->



    

     <!--END MAIN WRAPPER -->

     <?php
          include('include/footer.php');
      ?>


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
