


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>

     <meta charset="UTF-8" />
    <title>Information</title>
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
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
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
<body class="padTop53 " style="background-image:url(car1.jpg);">. 


     <!-- MAIN WRAPPER -->
  


      <?php
          include('include/dashboard.php');
      ?>

        <!--PAGE CONTENT -->
        


        <div id="content">
           
                
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h1 style="color:white;">Login Page</h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-5">
                            <div class="container">
   
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form  onsubmit="return validate()" class="form-signin" action="loginproc.php" method="POST">

                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your email-id and password  
                </p><br> 
                <input type="text" name="email" id="email1" placeholder="email-id" class="form-control" required /><br><div id="msg1" ></div>
                <input type="password" name="password" id="pwd1" placeholder="password" class="form-control" /><br><div id="msg2" required ></div>
                <button class="btn text-muted text-center btn-primary" type="submit">login</button>
                <a class="text-muted" href="#signup" data-toggle="tab"><button class="btn text-muted text-center btn-primary">sign up</button></a>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit"> Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="register.php" onsubmit="return validate_register()" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                
               <br>
                <input type="email"  id="email" name="email" placeholder="Your E-mail"  class="form-control" required /><br>
                 <input type="text" id="name" name="name" placeholder="Name" class="form-control" required /><br>
                <input type="password" id="pass1" name="pass1" placeholder="password" class="form-control" required/><br>
                <input type="password" id="pass2" name="pass2" placeholder="Re type password" class="form-control" required /><br>
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password???</a></li>
           
        </ul>
    </div>


</div>

                               
     
  </div>
</div>





   <!--END PAGE CONTENT -->

<script></script>

    

     <!--END MAIN WRAPPER -->

     


    <!-- PAGE LEVEL SCRIPTS -->
<script src="validate.js" ></script>
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
