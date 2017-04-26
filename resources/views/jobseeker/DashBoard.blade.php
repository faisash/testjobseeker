<!DOCTYPE html>
<html lang="en">
<head>


    <title>DashBoard</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/dash_board.css">
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

<!-- <div class="container-fluid" style="background-color: #008eef">
    <div class="container pic">
        <br><br><br><br><br><br>
        <ul class="list-inline"><br><br><br>
            <li><img id="image" src="photos/white.jpg" height="150px"></li><br>
            <li><h3 id="name">Zain Ul Hassan<br><h4 id="name">Software Engineer</h4></h3></li>
        </ul>
        <br><br><br><br>
    </div>
</div>
<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container box" id="down" style="background-color: white">

        <div class="row vdivide">

            <div class="col-sm-2 "><h4 id="a">Email <span class="glyphicon glyphicon-envelope" style="vertical-align:top; float: right" ></span><br><h6>info@dominioninc.com</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Phone <span class="glyphicon glyphicon-phone" style="vertical-align:top;  float: right"></span><br><h6>(0091)545635</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Experience <span class="glyphicon glyphicon-user" style="vertical-align:top; float: right"></span><br><h6>5 Years</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Expected Salary <span class="glyphicon glyphicon-usd" style="vertical-align:top; float: right"></span><br><h6>50k-60k</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Education <span class="glyphicon glyphicon-education" style="vertical-align:top; float: right"></span><br><h6>BS(CS)</h6><br></h4></div>
            <div class="col-sm-2 "><h4 id="a">Location <span class="glyphicon glyphicon-home" style="vertical-align:top; float: right"></span><br><h6>Lahore, Pakistan</h6><br></h4></div>

        </div>

    <!--   <ul class="list-inline">
                   <li><h4 id="a">Email</h4></li><br>
                   <li><h5 id="a">info@dominioninc.com</h5></li>
                       <li><h4 id="a">Email</h4></li><br>
                       <li><h5 id="a">info@dominioninc.com</h5></li>
               </ul> -->
<!--    </div>
    <br><br>
</div>    -->


 <div class="container-fluid box" style="background-color:#f5f5f5 ">
     <br><br>
    <div class="container box info" style="background-color:white ">
     <!--   <br><br><br><br><br><br> -->
        <br><br>
        <ul class="list-inline info">
            <li><img id="image" src="photos/white.jpg" height="220px" width="190px"></li>
            <li><h2 id="name">Zain Ul Hassan </h2>
            <h3 id="name">Software Engineer</h3>
                <h6 id="name"> <id style="color: grey">Experience</id> : 5 years </h6>
                <h6 id="name">  <id style="color: grey"> Expected Salary</id> : $2500</h6>
                <h6 id="name"> <id style="color: grey"> Email</id> :  info@theworkgenies.com</h6>
                <h6 id="name">  <id style="color: grey">Phone</id> :  (0091)-545635</h6>
              <!--  <h4 id="name">Experience : 5 Years</h4>
                <h4 id="name">Expected Salary :$2500</h4> -->
                <h6 id="name">  <id style="color: grey">Education</id> : BSc(CE)</h6>
                <h6 id="name">  <id style="color: grey">Location</id> : Lahore, Pakistan</h6></li>
        </ul>

    </div>

</div>

<div class="contanine-fluid" style="background-color:#f5f5f5 ">
    <div class="container">
        <br><br>
    </div>
</div>



<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="container box"style="background-color: white">
        <br><br>
        <div class="row">
            <div class="col-sm-8">
                <ul class="list-inline">
                    <div class="col-sm-5">
                        <li><h3 id="expire">Expiring Package After</h3></li></div>
                    <!-- <li><p id="demo"></p> -->

                    <!-- <script>
                         // Set the date we're counting down to
                         var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

                         // Update the count down every 1 second
                         var x = setInterval(function() {

                             // Get todays date and time
                             var now = new Date().getTime();

                             // Find the distance between now an the count down date
                             var distance = countDownDate - now;

                             // Time calculations for days, hours, minutes and seconds
                             var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                             var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                             var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                             var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                             // Output the result in an element with id="demo"
                             document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                 + minutes + "m " + seconds + "s ";

                             // If the count down is over, write some text
                             if (distance < 0) {
                                 clearInterval(x);
                                 document.getElementById("demo").innerHTML = "EXPIRED";
                             }
                         }, 1000);
                     </script>  -->
                    <li>   <div id="clockdiv">
                            <div>
                                <span class="days"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div>
                                <span class="hours"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div>
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div>
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                            <br><br>
                        </div> </li>
                </ul>


                <script>
                    function getTimeRemaining(endtime) {
                        var t = Date.parse(endtime) - Date.parse(new Date());
                        var seconds = Math.floor((t / 1000) % 60);
                        var minutes = Math.floor((t / 1000 / 60) % 60);
                        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                        var days = Math.floor(t / (1000 * 60 * 60 * 24));
                        return {
                            'total': t,
                            'days': days,
                            'hours': hours,
                            'minutes': minutes,
                            'seconds': seconds
                        };
                    }

                    function initializeClock(id, endtime) {
                        var clock = document.getElementById(id);
                        var daysSpan = clock.querySelector('.days');
                        var hoursSpan = clock.querySelector('.hours');
                        var minutesSpan = clock.querySelector('.minutes');
                        var secondsSpan = clock.querySelector('.seconds');

                        function updateClock() {
                            var t = getTimeRemaining(endtime);

                            daysSpan.innerHTML = t.days;
                            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                            if (t.total <= 0) {
                                clearInterval(timeinterval);
                            }
                        }

                        updateClock();
                        var timeinterval = setInterval(updateClock, 1000);
                    }

                    var deadline = new Date(Date.parse(new Date()) + 30 * 24 * 60 * 60 * 1000);
                    initializeClock('clockdiv', deadline);
                </script>



            </div>


            <div class="col-sm-3"  id="view" >

                <h3 id="total_views">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Views <!--&nbsp;&nbsp;----- --></h3></div>
            <div class="col-sm-1 numberCircle">30</div>


            <!-- <div class="col-sm-1" >
                 <h3>---</h3>
             </div> -->


        </div>


    </div>


    <br><br>
    <div class="container-fluid" >
        <div class="container box" style="background-color: white;" >
            <div class="row">
                <br>
                <div class="col-sm-2">
                    <ul class="list-inline">
                        <li> <h3>Profile Status </h3> </li></ul></div>


                <div class="col-sm-4">
                    <div class="progress" >
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="70" style="width:70%;">
                            70%
                        </div>
                    </div></div> <br>
                </ul>
                <div class="col-sm-6" >
                    <button class="btn btn-primary pull-right" id="complete">Complete Profile</button>
                </div>

            </div>

            <br>
        </div>
    </div>
    <br>



    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Who viewed your profile</h3>
                </div>
            </div>
        </div>
    </div>






    <div class="container-fluid cards-row">
        <div class="container box" style="background-color: white">
            <br><br><br>
            <div class="row card">

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">
                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!--  <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!--   <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!--  <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!--   <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <br>


            <div class="row card">

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!-- <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <!-- <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary">View Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 card1">
                    <img id="right1" src="photos/verified.png" height="20px" width="20px"><br>
                    <h7 id="right">VERIFIED</h7>

                    <div class="thumbnail">

                        <!--  <img src="images/600x400.png" alt="about us page design using bootstrap">-->
                        <img id="image1" class="team-pic"  src="photos/amazon.ico" >
                        <div class="caption">

                            <h3 id="c">Microsoft Company</h3>
                            <p  class="card-description">The olifers New Boston near New York.</p>
                            <ul class="list-inline" id="list-inline">
                                <li> <p1  class="card-description"><strong>Last viewed</strong><br><p1>3 hours ago</p1></p1></li>

                                <!-- <li><p2  class="card-description" ><strong>Views</strong><br><p2 >3</p2></p2></li><br> -->
                                <ul class="list-inline" id="list-inline1"  >
                                    <li ><p2  class="card-description"><strong style="text-align: right">Views</strong><br><p2 >3</p2></p2></li><br>
                                </ul>
                            </ul>

                            <button id="d" class="btn btn-primary ">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-5"></div>

                    <div class="col-sm-2 btn_view_all" >
                        <button class="btn btn-primary size" id="btn1">View All</button>
                    </div>

                    <div class="col-sm-5"></div>

                </div>
            </div>


            <br>

        </div>
    </div>










    <!--  <div class="container-fluid">
          <div class="container" style="background-color: white">
              <div class="row">
                  <div class="col-sm-12">

                          <div class="col-sm-3">
                              <div class="container">
                              <img src="photos/amazon.ico" width="50px" height="50px">
                          </div>
                      </div>

                      <div class="col-sm-3">
                          <div class="container" style="background-color: white">
                              <img src="photos/amazon.ico" width="50px" height="50px">
                          </div>
                      </div>

                      <div class="col-sm-3">
                          <div class="container" style="background-color: white">
                              <img src="photos/amazon.ico" width="50px" height="50px">
                          </div>
                      </div>

                      <div class="col-sm-3">
                          <div class="container" style="background-color: white">
                              <img src="photos/amazon.ico" width="50px" height="50px">
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div> -->


</div>



<!--<footer class="page-footer center-on-small-only">

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