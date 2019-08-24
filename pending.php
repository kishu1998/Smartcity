<?php

session_start();
if(isset($_SESSION['logged_in']))
{
include('include/db.php');

$query="select ur_location ,ur_complaint , ur_discription,id from user  ";

$res=mysqli_query($con,$query);


?>





  <!DOCTYPE html>
  <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
  <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
  <!--[if !IE]><!-->
  <html lang="en">
  <!--<![endif]-->

  <!-- BEGIN HEAD -->

  <head>
    <meta charset="UTF-8" />
    <title>welcome</title>
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
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->

  <body class="padTop53 ">


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
                <div class="panel panel-default">
                  <div class="panel-heading">
                    List 
                  </div>
                  <div class="panel-body">
                  	<form action="deletecom.php" method="POST">
                   


                    <div class="table-responsive">
                    		
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
							<th>Query id</th>
                          	<th>Location</th>
                            <th>conplaints</th>
                            <th>description</th>
                            <th>view</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <?php


                                while($row=mysqli_fetch_array($res))
                                  {

                                      echo  "<tr>";
									  
                                      echo "<td>".$row['id']."</td>";
									  
                                      echo "<td>".$row['ur_location']."</td>";

                                     echo "<td>".$row['ur_complaint']."</td>";

                                     echo "<td>".$row['ur_discription']."</td>";

                                   echo '<td>'."<a href='viewadmin.php?info1=".$row['id']."'>view</a>".'</td>';

                           
						 
							 
							 
                                      
                       echo "</tr>";

                            

                         }
                           ?>        
                        </tbody>
                      </table>

                       
                              
                         </form>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>







      <!-- PAGE LEVEL SCRIPTS -->

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
