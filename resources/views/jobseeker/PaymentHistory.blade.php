<!DOCTYPE html>
<html lang="en">
<head>

    <title>Payment History</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/payment_history.css">
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
                    <li class="" ><a href="Edit" class="hvr-underline-from-center" style="color: white;">EDIT RESUME</a></li>
                    <li ><a href="PaymentHistory" class="hvr-underline-from-center" style="color: white;">PAYMENT HISTORY</a></li>
                    <li ><a href="Payment" class="hvr-underline-from-center" style="color: white;">PAYMENT</a></li>
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
    <div class="container pic">
        <br><br><br><br><br><br>
        <ul class="list-inline"><br><br><br>
            <li ><img id="image" src="photos/white.jpg" height="150px"></li><br>
            <li ><h3 id="name">Zain Ul Hassan<br><h4 id="name">Software Engineer</h4></h3></li>
        </ul>
        <br><br><br><br>
    </div>
</div>
<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container box" id="down" style="background-color: white">

        <div class="row vdivide">

        <!--  <div class="col-sm-2 "><h4 id="a">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" style="vertical-align:top;"></span><br><h6>info@dominioninc.com</h6><br></h4></div> -->

            <div class="col-sm-2 "><h4 id="a">Email <span class="glyphicon glyphicon-envelope" style="vertical-align:top; float: right" ></span><br><h6 id="detail">info@dominioninc.com</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Phone <span class="glyphicon glyphicon-phone" style="vertical-align:top;  float: right"></span><br><h6 id="detail">(0091)545635</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Experience <span class="glyphicon glyphicon-user" style="vertical-align:top; float: right"></span><br><h6 id="detail">5 Years</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Expected Salary <span class="glyphicon glyphicon-usd" style="vertical-align:top; float: right"></span><br><h6 id="detail">50k-60k</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Education <span class="glyphicon glyphicon-education" style="vertical-align:top; float: right"></span><br><h6 id="detail">BS(CS)</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Location <span class="glyphicon glyphicon-home" style="vertical-align:top; float: right"></span><br><h6 id="detail">Lahore, Pakistan</h6><br></h4></div>

        </div>

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
    <div class="container box" style="background-color: white">



        <div class="row ">
            <br>
            <div class="col-sm-12">
                <div class="col-sm-4">

                    <h3 >Payment History</h3>
                </div>

                <div class="col-sm-4">
                    <ul class="list-inline package">
                        <li><h3 >Package</h3></li>
                        <li><button  class="btn btn-success">Active</button></li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <img id="print"  id="three" src="photos/print.png" width="30px" height="30px">
                </div>
            </div>
        </div>
        <br>



        <div class="row">
            <div class="table table-responsive">
                <table class="table table-striped table-bordered">

                    <thead>
                    <tr>
                        <th  id="color">Sr #</th>
                        <th  id="color">Invoice</th>
                        <th  id="color">Amount</th>
                        <th  id="color">Issue Date</th>
                        <th  id="color">Paid On</th>
                        <th  id="color">Status</th>
                        <th  id="color">Payment Method</th>
                        <th  id="color">Remarks</th>
                        <th  id="color"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>

                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>


                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>


                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>


                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>

                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>123456</td>
                        <td>2.99$</td>
                        <td>01/05/2012</td>
                        <td>09/05/2012</td>
                        <td>OK</td>
                        <td>Paypal</td>
                        <td>Paid</td>
                        <td>Print</td>

                    </tr>
                    </tbody>

                </table>

            </div>

        </div>

    </div>
    <br> <br>

</div>



<!--<footer class="page-footer center-on-small-only ft">

    <!--Footer Links-->

 <!--   <div class="container-fluid" style= 'background-color: #59596a;' >
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
  <!--                      </ul>

                    </font></div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!--/.Footer-->

<!-- Footer -->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid" >
        <div class="container" style ='background: transparent;' >
            <div class="row" >

                <div class="col-sm-3" > <font color="white" ;></font>

                    &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <h3><font size="4.5px" color="white">OUR COMPANY</font></h3>
                    <a  href="#!" ><font color="white">About us</font></a><br>
                    <a href="faqs.html"><font color="white">FAQs</font></a><br>
                    <a href="#!"><font color="white">Privacy Policy</font></a><br>
                    <a href="#!"><font color="white">Contact Us</font></a>
                    <br><br>

                    <h3><font size="4.5px"  color="white">IMPORTANT INFORMATION</font></h3>


                    <a href="#!"><font color="white">Browse Candidates</font></a></li><br>
                    <a href="#!"><font color="white">Browse Categories</font></a></li><br>



                    <br><br>



                </div>
                <div class="col-sm-5" style="text-align: center;"><font color="white";>
                        <br>
                        <h3><font size="4.5px" color="white">FOLLOW US</font></h3>


                        <a href="#"> <img src="Photos/in.png" width="50" height="45"></a>&nbsp;&nbsp;
                        <a href="#"> <img src="Photos/fb.png" width="50" height="45"></a>&nbsp;&nbsp;
                        <a href="#"><img src="Photos/g.png" width="50" height="45"></a>&nbsp;&nbsp;
                        <a href="#"><img src="Photos/tube.png" width="50" height="45"></a>&nbsp;&nbsp;
                        <a href="#"><img src="Photos/Twitter.png" width="50" height="45"></a>&nbsp;&nbsp;

                        <br><br>
                    </font> </div>

                <div class="col-sm-4"><font color="white">
                        <br>
                        <h3><font size="4.5px" color="white">NEWS LETTER</font></h3>

                        <div class="col-xs-9" style="margin-left: -15px;">

                            <input class="form-control" id="ex8" type="email" style="background:transparent;color: white;border-radius: 0px;"  placeholder="Enter E-mail">
                        </div>
                        <button style="background:transparent; height: 35px;"  type="submit"><font color="white";>Submit</font></button>

                        <br><br><br><br>
                        <h3 ><font size="4.5px" color="white">PAYMMENT METHOEDS</font></h3>

                        <a href="#"><img src="Photos/easypay1.png" width="70" height="50"></a>&nbsp;
                        <a href="#"><img src="Photos/visa2.png" width="75" height="50"></a>

                    </font>

                </div>
            </div>
        </div>
    </div>
</footer>



</body>
</html>




