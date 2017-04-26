<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/login.css">

    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- Theme -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Login -->
<link href="assets/css/login.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
    <!--[if IE 7]>
   <link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
   <![endif]-->

    <!--[if IE 8]>
   <link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!--=== JavaScript ===-->

   <script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>

   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

   <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="assets/js/libs/html5shiv.js"></script>
    <![endif]-->

    <!-- Beautiful Checkboxes -->
  <script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>

   <!-- Form Validation -->
   <script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>

    <!-- Slim Progress Bars -->
  <script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

   <!-- App -->
  <script type="text/javascript" src="assets/js/login.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
   <script>
       $(document).ready(function(){
           "use strict";

           Login.init(); // Init login JavaScript
       });
   </script>




</head>
<body style="padding-top: 55px;">

<!--Nav Bar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" style="background: #3B5998  !important;margin-right: -1px;">
        <div class="container"  style="background-color: #3B5998 ;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-header">
                <a href="#" class="navbar-brand" style="color: white;">LOGO</a>
                <a href="#" class="navbar-brand" style="color: white;">DOMINION INC</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="text-align: center;float: right;margin-right: -15px;">
                    <li class=""><a href="#" class="hvr-underline-from-center" style="color: white;">&nbsp;HOME</a></li>
                    <li ><a href="#" class="hvr-underline-from-center" style="color: white;">WHO WE ARE</a></li>
                    <li class="" ><a href="#" class="hvr-underline-from-center" style="color: white;">PRICING</a></li>
                    <li class="" ><a href="#" class="hvr-underline-from-center" style="color: white;">CONTACT US</a></li>
                    <li ><a href="Login" class="hvr-underline-from-center" style="color: white;">LOGIN</a></li>
                    <li ><a href="SignUp" class="hvr-underline-from-center" style="color: white;">SIGNUP</a></li>

                   <!-- <li ><a href="ChangePassword" class="hvr-underline-from-center" style="color: white;">ACCOUNT SETTINGS</a></li>
                    <li ><a href="#" class="hvr-underline-from-center" style="color: white;">LOGOUT</a></li>
                    <!--  <li ><a href="ContactUs.html" class="hvr-underline-from-center" style="color: white;">PROFESSIONALS</a></li> -->

                    <!--<li style="width: 108px; margin-top: 2px;">
                        <font color="white"; font size="3px">
                            <select class='dropdown' name='select_catalog' id='category' style="background-color: #3B5998 ; border:none; ">
                                <option value='defualt' >English</option>
                                <option value='1'>????</option>

                            </select>
                        </font>
                    </li> -->
                </ul>
            </div></div>
    </div>
</nav>

<!--/Nav Bar -->

<!-- LOGIN -->

<!--<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <h1 id="login">Log In</h1>
                <!--  <br><br>
                  <button id="a">
                  <label class="checkbox-inline">
                      <input type="checkbox" value="">I am an Employer
                  </label></button>
                  <button id="b">
                  <label class="checkbox-inline">
                      <input type="checkbox" value="">I am a Job Seeker
                  </label>
                  </button>


                      <form id="contact" method="post" class="form" role="form" >

                          <br> <br>
                                  <input  text align="center" class="form-control" id="name1" name="name" placeholder="Username" type="text" >

                              <br>

                                  <input text align="center" class="form-control" id="email" name="email" placeholder="Password" type="password">


                      </form> -->

 <!--           </div>
        </div>
        <br><br>

        <div class="row">

            <div class="col-sm-6">  <h1 id="mission">Our Mission</h1>
                <div class="col-sm-7">
                    <p id="para">To provide a secure, reliable, less charged and hassle free services for both candidate and
                        employer to make their employment finalized in a moment.</p></div>
            </div>
            <br><br>
            <div class="col-sm-6">
              <!--  <button id="a">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">I am an Employer
                    </label></button>
                <button id="b">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">I am a Job Seeker
                    </label>
                </button>-->
  <!--              <br><br>

                <form class="form-vertical login-form" action="index.html" method="post">
                    <div class="alert fade in alert-danger" style="display: none;">
                        <i class="icon-remove close" data-dismiss="alert"></i>
                        Enter any username and password.
                    </div>

                    <br><br>
                    <div class="form-group">
                        <!--<label for="username">Username:</label>-->
  <!--                      <div class="input-icon">
                            <i class="icon-user"></i>
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." />
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <!--<label for="password">Password:</label>-->
 <!--                       <div class="input-icon">
                            <i class="icon-lock"></i>
                            <input type="password" name="password" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />

                        </div>
                    </div>

                    <a href="#"><p>Don't have an account? Sign Up</p></a>
                    <br>
                  <!--  <div class="col-sm-3 ">
                        <button id="button" class="btn btn-primary pull-left">Log In</button></div> -->

  <!--            <div class="">

                     <button type="submit" class="submit btn btn-primary pull-left">
                         Sign In
                     </button>
                 </div>

                 <div class="col-sm-7 p ">
                     <a href="#"><p1 id="c">Forgot Password?</p1></a></div>

             </form>

         </div>
     </div>
   </div>
</div>   -->

<br><br>

<body class="login">
<div class="container-fluid">
    <div class="container">


        <div class="col-sm-4 mission">
            <h1 id="mission">Our Mission</h1>
            <p id="para">To provide a secure, reliable, less charged and hassle free services for both candidate and
                employer to make their employment finalized in a moment.</p>
        </div>




        <div class="col-sm-8">
<!-- Login Box -->
<br><br><br>
<div class="box">
    <div class="content">
        <!-- Login Formular -->
        <form class="form-vertical login-form" action="index.html" method="post">
            <!-- Title -->

            <h3 class="form-title">Sign In to your Account</h3>
            <hr>

            <!-- Error Message -->
            <div class="alert fade in alert-danger" style="display: none;">
                <i class="icon-remove close" data-dismiss="alert"></i>
               Enter any username and password.
            </div>
            <br><br>
            <!-- Input Fields -->

            <div class="form-group group">
                <!--<label for="username">Username:</label>-->
                <div class="input-icon">
                   <i class="icon-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true" data-msg-required="Please enter your username." data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
                </div>
            </div>

            <div class="form-group group">
                <!--<label for="password">Password:</label>-->
                <div class="input-icon">
                    <i class="icon-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password." />
                </div>
            </div>
            <!-- /Input Fields -->

            <!-- Form Actions -->
            <div class="form-actions ">
                <label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Remember me</label>
                <button type="submit" class="submit btn btn-primary pull-right">
                    Sign In <!--<i class="icon-angle-right"></i>-->
                </button>
            </div>
        </form>
        <!-- /Login Formular -->

        <!-- Register Formular (hidden by default) -->
        <!-- /Register Formular -->
    </div> <!-- /.content -->
<br>
    <!-- Forgot Password Form -->
    <div class="inner-box">
        <div class="content">
            <!-- Close Button -->
            <i class="icon-remove close hide-default"></i>

            <!-- Link as Toggle Button -->
            <a href="#" class="forgot-password-link forgot-password">Forgot Password?</a><br>

            <!-- Forgot Password Formular -->
        <!--    <form class="form-vertical forgot-password-form hide-default" action="login.html" method="post">
                <!-- Input Fields -->
         <!--       <div class="form-group">
                    <!--<label for="email">Email:</label>-->
        <!--            <div class="input-icon">
                        <i class="icon-envelope"></i>
                        <input type="text" name="email" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />
                    </div>
                </div>
                <!-- /Input Fields -->

       <!--         <button type="submit" class="submit btn btn-default btn-block">
                    Reset your Password
                </button>
            </form>
            <!-- /Forgot Password Formular -->

        </div>
    </div>


</div>
    </div>
</div>
</div>
</body>
</body>
</html>



