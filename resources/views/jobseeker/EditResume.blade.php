<!DOCTYPE html>
<html lang="en">
<head>


    <title>Edit Resume</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/edit_resume.css">
    <link rel="stylesheet" href="css/plugins.css">







    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">





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
                    <li class=""><a href="DashBoard" class="hvr-underline-from-center" style="color: white;">&nbsp;DASHBOARD</a></li>
                    <li ><a href="CandidateProfile" class="hvr-underline-from-center" style="color: white;">PROFILE</a></li>
                    <li class="" ><a href="EditResume" class="hvr-underline-from-center" style="color: white;">EDIT RESUME</a></li>
                    <li ><a href="PaymentHistory" class="hvr-underline-from-center" style="color: white;">PAYMENT HISTORY</a></li>

                    <li ><a href="ChangePassword" class="hvr-underline-from-center" style="color: white;">ACCOUNT SETTINGS</a></li>
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
<div class="container-fluid" style="background-color: #008eef">
    <div class="container">
        <br>
        <h2 id="edit">Edit Your Profile</h2>
        <br><br><br><br>
        <ul class="list-inline"><br><br><br>
            <li ><img id="image" src="photos/white.jpg" height="150px"></li>
            <li ><h3 id="name">Zain Ul Hassan<br><h4 id="name">Software Engineer</h4></h3></li><br>
            <button id="button">Change Picture</button>
        </ul>
        <br><br><br>
    </div>
</div>


<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container box" id="down" style="background-color: white">

    <!--   <ul class="list-inline">
               <li><h4 id="a">Email</h4></li><br>
               <li><h5 id="a">info@dominioninc.com</h5></li>
                   <li><h4 id="a">Email</h4></li><br>
                   <li><h5 id="a">info@dominioninc.com</h5></li>
           </ul> -->
    </div>
    <br><br>
</div>


<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >


                <!--<div class="table table-responsive">
                    <table class="table table-striped table-bordered">


                        <tbody>
                        <tr>
                            <th scope="row">Public Profile</th></tr>
                        <tr>
                            <td>User Dashboard</td></tr>
                        <tr>
                            <td>Edit Profile</td></tr>
                        <tr>
                            <td>Change Password</td></tr>
                        <tr>
                            <td>Logout</td>
                        </tr>
                        </tbody>
                    </table>
        </div> -->


                <div class="btn-group-vertical">
                    <ul class="list-inline">
                        <a href="CandidateProfile"> <li><button id="btn" type="button" class="btn btn-default">Public Profile</button></li></a>
                        <a href="DashBoard"><li><button id="btn" type="button" class="btn btn-default">Dashboard</button></li></a>
                        <a href="EditResume"><li><button id="btn" type="button" class="btn btn-default">Edit Profile</button></li></a>
                        <a href="ChangePassword"><li><button id="btn" type="button" class="btn btn-default">Change Password</button></li></a>
                        <a href="#"> <li><button id="btn" type="button" class="btn btn-default">Logout</button></li></a>
                    </ul>
                </div>
            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">CAREER SUMMARY<span class="glyphicon gly glyphicon-pencil" style="vertical-align:top;"></span></h3>
                </div>
                <p id="paragraph">
                    Software Engineer (JAVA) over 10 years of experience providing thorough and skillful support to senior executives. Experienced
                    Software Engineer successful in project management and systems administration.10 years of administrative experience in educational settings; particular skill in establishing rapport with people from diverse backgrounds.Ten years as anadministrative support professional in a corporation that provides confidential case work.More than six years of senior softwareengineering experience, with strong analytical skills and a broad range of computer expertise.
                </p>

                <div class="btn-group">
                    <button id="group_button" type="button" class="btn btn-primary">Save</button>
                    <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                </div>
                <br><br>

            </div>
        </div>
    </div>
    <br><br>
</div>





<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Applying For<span class="glyphicon gly glyphicon-pencil" style="vertical-align:top;"></span></h3>
                </div>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Categories</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Fuctional Area</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Job Type</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Job Shift</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>
                    <br><br>
                </form>

            </div>
        </div>
        <br><br>
    </div>
</div>






<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Expected Salary<span class="glyphicon gly glyphicon-pencil" style="vertical-align:top;"></span></h3>
                </div>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Range Between</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>
                    <br><br>
                </form>

            </div>
        </div>
        <br><br>
    </div>
</div>






<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Personal Information<span class="glyphicon gly glyphicon-pencil" style="vertical-align:top;"></span></h3>
                </div>

                <form id="contact" method="post" class="form" role="form" >
                    <div class="row">

                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">
                                <input  text align="center" class="form-control" id="name1" name="name" placeholder="First Name" type="text" >
                            </div> </div>
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">
                                <input text align="center" class="form-control" id="email" name="email"  placeholder="Last Name" type="email">
                            </div></div>
                    </div>


                    <div class="row">

                        <div class="col-sm-2 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="exampleSelect1">
                                    <option class="default">Country code</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 form-group">
                            <input   class="form-control" id="name1" name="name" placeholder="Mobile Number" type="text" >
                        </div>


                        <div class="col-sm-6 form-group">
                            <input text align="center" class="form-control" id="email" name="email" placeholder="Email" type="email">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 ">
                             <div class="form-group" style="width: 100%">

                               <select class="form-control" id="dateOfBirth">
                                    <option class="default">Date Of Birth</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                        </div>



                            </div>

                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="Gender">
                                    <option value='defualt'>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="maritalStatus">
                                    <option value='defualt'>Marital Status</option>
                                    <option>Single</option>
                                    <option>Married</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <input  class="form-control" id="nationality" name="email" placeholder="Nationality" type="text">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input  class="form-control" id="nationality" name="email" placeholder="Driving License" type="text">
                        </div>
                        <div class="col-sm-6 form-group">
                            <input  class="form-control" id="nationality" name="email" placeholder="Re-locate" type="text">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="country">
                                    <option value='defualt'>Country</option>
                                    <option>Pakistan</option>
                                    <option>Pakistan</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="city">
                                    <option value='defualt'>City</option>
                                    <option>Pakistan</option>
                                    <option>Pakistan</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-4 ">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="state">
                                    <option value='defualt'>State</option>
                                    <option>Pakistan</option>
                                    <option>Pakistan</option>

                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input  class="form-control" id="address" name="address" placeholder="Address" type="text">
                        </div>
                    </div>

                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>
                    <br><br>



                </form>


            </div>
        </div>
        <br><br>
    </div>
</div>





<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Skills<span class="glyphicon gly glyphicon-plus-sign " style="vertical-align:top;"><span class="glyphicon  glyphicon-remove-circle" style="vertical-align:top;"></span></span></h3>
                </div>

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="skillName">
                                    <option class="default">Skill Name</option>
                                    <option>c++</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="percentage">
                                    <option class="default">Percentage</option>
                                    <option>10%</option>
                                    <option>30%</option>
                                    <option>40%</option>
                                    <option>50%</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="experience_in_this_skill">
                                    <option class="default">Experience in this Skill</option>
                                    <option>10%</option>
                                    <option>30%</option>
                                    <option>40%</option>
                                    <option>50%</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>
                    <br><br><br>


                    <div class="row card">
                        <div class="col-sm-3 skills">


                            <div class="w3-container">
                                <div class="w3-card-4" style="width:100%;">
                                    <header class="w3-container w3-blue">
                                        <h4 id="skills">Javascript</h4>
                                    </header>

                                    <div class="w3-container">
                                        <p id="right"><strong>Experience</strong><br>2 years</p>
                                        <p id="right1"><strong> Rating</strong><br>70%</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-sm-3 skills">


                            <div class="w3-container">
                                <div class="w3-card-4" style="width:100%;">
                                    <header class="w3-container w3-blue">
                                        <h4 id="skills">Javascript</h4>
                                    </header>

                                    <div class="w3-container">
                                        <p id="right"><strong>Experience</strong><br>2 years</p>
                                        <p id="right1"><strong> Rating</strong><br>70%</p>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="col-sm-3 skills">


                            <div class="w3-container">
                                <div class="w3-card-4" style="width:100%;">
                                    <header class="w3-container w3-blue">
                                        <h4 id="skills">Javascript</h4>
                                    </header>

                                    <div class="w3-container">
                                        <p id="right"><strong>Experience</strong><br>2 years</p>
                                        <p id="right1"><strong> Rating</strong><br>70%</p>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="col-sm-3 skills">


                            <div class="w3-container">
                                <div class="w3-card-4" style="width:100%;">
                                    <header class="w3-container w3-blue">
                                        <h4 id="skills">Javascript</h4>
                                    </header>

                                    <div class="w3-container">
                                        <p id="right"><strong>Experience</strong><br>2 years</p>
                                        <p id="right1"><strong> Rating</strong><br>70%</p>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                    <br>


                </form>
            </div>
        </div>
        <br><br>
    </div>
</div>





<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Experience<span class="glyphicon gly glyphicon-plus-sign" style="vertical-align:top;"></span></h3>
                </div>

                <form id="contact" method="post" class="form" role="form" >
                    <div class="row">

                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">
                                <input  class="form-control" id="designation" name="name" placeholder="Designation" type="text" >
                            </div> </div>

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="location">
                                    <option class="default">Location</option>
                                    <option>Lahore, Pakistan</option>
                                    <option>Lahore, Pakistan</option>
                                    <option>Lahore, Pakistan</option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="duration">
                                    <option class="default">Duration</option>
                                    <option>1 Year</option>
                                    <option>1-2 Year</option>
                                    <option>1-2 Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">
                                <input  class="form-control" id="description" name="description" placeholder="Description" type="text" >
                            </div> </div>
                    </div>

                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 id="post">Sr. Software Engineer(JAVA)</h3>
                            <ul class="list-inline">
                                <li><span class="glyphicon glyphicon-map-marker" style="vertical-align:top;"></span></li>
                                <li><p>Lahore Pakistan</p></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <p id="experience">3 Years Experience</p>
                        </div>
                        <div class="col-sm-4">
                            <h3><span class="glyphicon gly1 glyphicon-pencil" style="vertical-align:top;"></span></h3>
                            <h3><span class="glyphicon gly1 glyphicon-remove-circle" style="vertical-align:top;"></span></h3>
                            <br>
                        </div>
                        <br><br>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p id="explain">A passionate Software Engineer to design, develop and install software solutions. I was able to build high-quality, innovative and
                                fully performing software in compliance with coding standards and technical design.Software engineer responsibilities which
                                include development, writing code, and documenting functionality.</p>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-sm-6">
                            <h3 id="post">Sr. Software Engineer(JAVA)</h3>
                            <ul class="list-inline">
                                <li><span class="glyphicon glyphicon-map-marker" style="vertical-align:top;"></span></li>
                                <li><p>Lahore Pakistan</p></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <p id="experience">1 Year Experience</p>
                        </div>
                        <div class="col-sm-4">
                            <h3><span class="glyphicon gly1 glyphicon-pencil" style="vertical-align:top;"></span></h3>
                            <h3><span class="glyphicon gly1 glyphicon-remove-circle" style="vertical-align:top;"></span></h3>
                            <br>
                        </div>
                        <br><br>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p id="explain">A passionate Software Engineer to design, develop and install software solutions. I was able to build high-quality, innovative and
                                fully performing software in compliance with coding standards and technical design.Software engineer responsibilities which
                                include development, writing code, and documenting functionality.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </div>
</div>




<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Education<span class="glyphicon gly glyphicon-plus-sign" style="vertical-align:top;"></span></h3>
                </div>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="degreeLevel">
                                    <option class="default">Degree Level</option>
                                    <option>Matric</option>
                                    <option>BS</option>
                                    <option>Master</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="degreeLevel">
                                    <option class="default">Degree Type</option>
                                    <option>BS</option>
                                    <option>BSc</option>
                                    <option>Arts</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">
                                <input  class="form-control" id="degreeTittle" name="degree tittle" placeholder="Degree Tittle" type="text" >
                            </div> </div>

                        <div class="col-sm-6 ">
                            <div class="form-group" style="width: 100%">
                                <input  class="form-control" id="institute" name="institute" placeholder="institute" type="text" >
                            </div> </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="Location">
                                    <option class="default">Location</option>
                                    <option>Lahore, Pakistan</option>
                                    <option>Lahore, Pakistan</option>
                                    <option>Lahore, Pakistan</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group" style="width: 100%">

                                <select class="form-control" id="completionYear">
                                    <option class="default">Completion Year</option>
                                    <option>2012</option>
                                    <option>2010</option>
                                    <option>2009</option>

                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="btn-group">
                        <button id="group_button" type="button" class="btn btn-primary">Save</button>
                        <button id="group_button" type="button" class="btn btn-default ">Cancel</button>

                    </div>

                    <br><br>




                    <div class="row">
                        <div class="col-sm-8">
                            <h3 id="post">Master in Computer Science</h3>
                            <ul class="list-inline">
                                <li><span class="glyphicon glyphicon-map-marker" style="vertical-align:top;"></span></li>
                                <li><p>UMT Lahore Pakistan</p></li><br>
                                <li><p>01 Jan 2011 - 01 Jan 2015</p></li>
                            </ul>
                        </div>


                        <div class="col-sm-4">
                            <h3><span class="glyphicon gly1 glyphicon-pencil" style="vertical-align:top;"></span></h3>
                            <h3><span class="glyphicon gly1 glyphicon-remove-circle" style="vertical-align:top;"></span></h3>
                            <br><br>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p  id="explain">The Master in Computer Science program seeks to prepare the participants in applying the latest computer technology to the real
                                world business organizations. The program prepares participants with an in-depth understanding of core and advanced topics in
                                Computer Sciences and trains them to use the latest tools to represent, model and solve real world business problems.</p>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-sm-8">
                            <h3 id="post">BS in Computer Science</h3>
                            <ul class="list-inline">
                                <li><span class="glyphicon glyphicon-map-marker" style="vertical-align:top;"></span></li>
                                <li><p>UMT Lahore Pakistan</p></li><br>
                                <li><p>01 Jan 2011 - 01 Jan 2015</p></li>
                            </ul>
                        </div>

                        <div class="col-sm-4">
                            <h3><span class="glyphicon gly1 glyphicon-pencil" style="vertical-align:top;"></span></h3>
                            <h3><span class="glyphicon gly1 glyphicon-remove-circle" style="vertical-align:top;"></span></h3>
                            <br><br>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p  id="explain">The Master in Computer Science program seeks to prepare the participants in applying the latest computer technology to the real
                                world business organizations. The program prepares participants with an in-depth understanding of core and advanced topics in
                                Computer Sciences and trains them to use the latest tools to represent, model and solve real world business problems.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <h3 id="post">Diploma in Information Technology</h3>
                            <ul class="list-inline">
                                <li><span class="glyphicon glyphicon-map-marker" style="vertical-align:top;"></span></li>
                                <li><p>UMT Lahore Pakistan</p></li><br>
                                <li><p>01 Jan 2011 - 01 Jan 2015</p></li>
                            </ul>
                        </div>


                        <div class="col-sm-4">
                            <h3><span class="glyphicon gly1 glyphicon-pencil" style="vertical-align:top;"></span></h3>
                            <h3><span class="glyphicon gly1 glyphicon-remove-circle" style="vertical-align:top;"></span></h3>
                            <br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p  id="explain">The Master in Computer Science program seeks to prepare the participants in applying the latest computer technology to the real
                                world business organizations. The program prepares participants with an in-depth understanding of core and advanced topics in
                                Computer Sciences and trains them to use the latest tools to represent, model and solve real world business problems.</p>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
        <br><br>
    </div>
</div>



<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container " >

        <div class="row">
            <div class="col-sm-3" >

            </div>

            <div class="col-sm-9 box" style="background-color: white">
                <div class="page-header">

                    <h3 id="heading">Follow Me On<span class="glyphicon gly glyphicon-plus-sign " style="vertical-align:top;"><span class="glyphicon  glyphicon-remove-circle" style="vertical-align:top;"></span></span></h3>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-inline images">
                            <li><img src="photos/facebook1.png " width="100px" height="100px"></li>
                            <li><img src="photos/T.png" width="80px" height="80px"></li>
                            <li><img src="photos/11.png" width="80px" height="80px"></li>
                            <li><img src="photos/g.png" width="80px" height="80px"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>


<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid" style= 'background-color: #59596a;' >
        <div class="container" style ='background-color: #59596a;' >
            <div class="row" >

                <div class="col-sm-4" > <font color="white" ; font face="lato">
                        <br>
                        &nbsp;&nbsp;&nbsp;
                        <label  ><font size="4px" >Our Company</font></label>

                        <ul class="list-inline" >

                            &nbsp;&nbsp;&nbsp;

                            <li><a  href="#!" ><font color="white">About us</font></a></li><br>
                            &nbsp;&nbsp;&nbsp;
                            <li><a href="#!"><font color="white">FAQS</font></a></li><br>
                            &nbsp;&nbsp;&nbsp;
                            <li><a href="#!"><font color="white">Privacy Policy</font></a></li><br>
                            &nbsp;&nbsp;&nbsp;
                            <li><a href="#!"><font color="white">Contact Us</font></a></li>
                        </ul><br><br>

                        <div>

                            &nbsp;&nbsp;&nbsp;
                            <label><font size="4px">Social Links :</font></label>
                            <ul class="list-inline">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#"> <img src="Photos/11.png" width="52" height="52"></a>
                                <a href="#"> <img src="Photos/facebook1.png" width="70" height="70"></a>
                                <a href="#"><img src="Photos/T.png" width="50" height="50"></a>&nbsp;&nbsp;



                            </ul><br><br>
                        </div>


                    </font></div>
                <div class="col-sm-4"><font color="white"; font face="lato">
                        <br>
                        &nbsp;&nbsp;&nbsp;
                        <label><font size="4px">Important Information</font></label>
                        <ul class="list-inline">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#!"><font color="white">Browse Candidates</font></a></li><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#!"><font color="white">Browse Categories</font></a></li><br>
                        </ul><br><br>
                    </font> </div>

                <div class="col-sm-4"><font color="white">
                        <br>
                        &nbsp;&nbsp;&nbsp;
                        <label><font size="4px";font face="lato"; >News Letter</font></label><br><br>

                        <div class="col-xs-9" >

                            <font face="lato"> <input class="form-control" id="ex8" type="text"  placeholder="Enter E-mail"></font>
                        </div>
                        <a href="#"><button style="background-color:#00aeef;border-color: #00aeef; height: 35px; margin-left: -12px"  type="button"><font color="white"; font face="lato">Submit</font></button></a><br><br><br><br><br>


                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label ><font size="4px"; font face="lato">Payment Methods :</font></label><br>
                        <ul class="list-inline">&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#"><img src="Photos/easypay1.png" width="70" height="50"></a>&nbsp;
                            <a href="#"><img src="Photos/visa2.png" width="75" height="50"></a>
                            <!-- <a href="#"><img src="Photos/mobi.jpg" width="80" height="50"></a> -->
                        </ul>

                    </font></div>
            </div>
        </div>
    </div>
</footer>
<!--/.Footer-->








</body>
</html>