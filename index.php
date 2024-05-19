<?php
// <NAME> IBARHIM SULU-GAMBARI
// <CONTRIBUTION TO THIS PAGE> The entire page apart from the header 
// WITH  THE USE OF HTML,CSS and PHP
session_start();
include('functions/dbconfig.php');

if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page 
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

* {
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
body{
    text-align: center;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.H1{
display: flex;
}
nav {
    overflow: hidden;
    text-align: center;
    margin-left: 160px;
    padding-left: 100px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
nav a {
    font-size: large;
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding-top: 20px;
    padding-bottom: 5px;
    margin-left: 30px;
    text-decoration: none;
    transition: border-bottom 0.3s; 
    border-bottom: 2px solid transparent; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

nav a:hover {
    border-bottom: 2px solid #129B04;
}


.b1 {
    background-color: #129B04;
    border: none; 
    color: white; 
    padding: 5px 32px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    margin-bottom:181px ;
    cursor: pointer; 
    border-radius: 100px; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .b2{
    margin: 30px 5px ;
    background-color: #129B04;
    border: none; 
    color: white; 
    padding: 10px 50px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    margin-bottom:60px ;
    cursor: pointer; 
    border-radius: 5px; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .b1:hover {
    background-color: #129B04;
    } 
    .first{
    background-image: url('./Images/logo/upper.jpeg');
    background-size: cover;
    }

    h1{
    color: #129B04;
    margin-top: 200px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    h2{
    background-image: linear-gradient(to right, #129B04,#063501 );
    background-clip:text;
    -webkit-text-fill-color: transparent; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 10px;
    }
    h4{
    margin: 10px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
    }
    h3{
    color: #129B04;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .second{
    display: flex;
    }
    .mission1{
    background-color: whitesmoke;

    }
    .mission2{
    background-image: url('./Images/logo/mission.jpeg');
    padding: 5px 341.4px;
    background-size: cover;
    }
    .mission3{
    background-image: url('./Images/logo/lower.png');
    padding: 5px 341.4px;
    background-size: cover;
    }
.h{
    text-align: center;
}
.branch{
    display: flex;
}
.branch1{
    display: flex;
    margin: 10px;
}
.ca{
    margin: 10px 150px;
}
.cc{
    margin: 1px 110px;
}
.cb{
    margin: 10px 150px;
}
.cd{
    margin: 10px 150px;
}
#fonta{
    color: #129B04;
}
.larger-icon {
    font-size: 36px; 
}
.care{
    background-color: whitesmoke;
}
.branch img{
    display: flex;
    margin: 40px;
    border-radius: 10px;
}
h6{
    color: white;
    background-color:rgba(0, 0, 0, 0.612);
    border-radius: 200px;
    padding: 10px 20px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
h5{
    margin: 10px;
}
footer{
    display: flex;
    background-color: whitesmoke;
    padding-top: 20px;
}
.f1{
    margin: 20px 80px;

}
.f1 a{
    margin-top: 5px;
    margin-bottom: 6px;
    font-size: small;
    float: left;
    display: block;
    color: black;
    text-align: center;
    text-decoration: none;
    transition: border-bottom 0.3s; 
    border-bottom: 2px solid transparent; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.media a{
    margin: 10px 20px;
}
.f2{
    display: flex;
    color: gray;
    border-top: 1px solid gray;
    margin-top:1px;
    padding-top: 20px;
}
.f3{
    margin-left: 750px;
}
.logout-btn {
    overflow: hidden;
    text-align: center;
    margin-left: 160px;
    padding-left: 100px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background-color: #129B04;
    border: none; 
    color: white; 
    padding: 10px 50px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    margin-bottom:60px ;
    cursor: pointer; 
    border-radius: 5px; 
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.logout-btn:hover {
    background-color: #129B04;
}
      </style>
      </head>
      <body>
        <div class="first">
            <div class="H1">
                <div>
                <?php if (isset($_SESSION['carer_id'])) : ?>
                    <a href="dashboard-carer.php"> <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;"></a>
                
                    <?php elseif(isset($_SESSION['patient_id'])) : ?>
                        <a href="dashboard-patient.php"> <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;"></a>
                    <?php endif; ?>
                   
                </div>
                <div>
                    <nav>
                        <a href="./index.html"><b>Home</b></a>
                        <a href="./careers.html"><b>Careers </b></a>
                        <a href="./testimonial.html"><b>Testimonials </b></a>
                        <a href="./Advice.html"><b>Advice </b></a>
                        <a href="./About.html"><b>About Us </b></a>
                    </nav>
                      
                </div>
                <div>
                    <nav>
                    <?php if (isset($_SESSION['patient_id']) || isset($_SESSION['carer_id'])) : ?>
                        <form method="post">
                            <button type="submit" name="logout" class="logout-btn" >Log Out</button>
                        </form>
                    <?php else: ?>
                        <div>
                            <a href="log-in.php">Login</a>
                            <a href="signuppage.php" >Sign Up</a>
                        </div>
                    <?php endif; ?>
                </nav>
                </div>
                
            </div>
            <h1><b>
                Your Most Trusted Health Partner
            </b>
            </h1>
            <h4><b>
                At Spec, we offer more than just world class care – <p></p>our carers become cherished 
                companions, bringing warmth,<p></p> laughter, and the joy of a true friend into your life.
            </b>
            </h4>
            <div>
                <a href="#" class="b1"><b>Get a Carer</b></a>
            </div>
        </div>
        <div class="second">
            <div class="mission1">
                <h2><b>
                    OUR MISSION
                </b>
                </h2>
                <h4>
                    At SPEC, our mission is simple yet profound: to connect you with the <p></p> most exceptional caregivers in your vicinity, ensuring you receive <p></p> top-tier assistance tailored to your needs. We understand the <p></p>significance of having trustworthy and competent carers <p></p>, which is why we dedicate ourselves to handpicking the best professionals <p></p>available. <p></p>

                   <p></p>But our commitment doesn't stop there. We recognise that effective <p></p> communication is the cornerstone of any successful caregiving <p></p>relationship. That's why we go beyond just matching you with a <p></p> carer. We provide a suite of cutting-edge tools and <p></p>resources designed to facilitate seamless communication between you and <p></p> your caregiver.
                </h4>
            </div>
            <div class="mission2">
            </div>
        </div>
        <h2>
            <b class="h">
                HOW WE HELP
            </b>
        </h2>
        <h5>
            <b class="h">
                our premium features at your disposal
            </b>
        </h5>
        <div class="branch">
            <div class="ca">
                <video width="340px" height="260px" controls>
                    <source src="./videos/Chat Bot.mp4" type="video/mp4">
                </video>
                <a href=""><h2>
                    <b>
                        Chat Bot
                    </b>
                </h2></a>
                <h4>
                    In the absence of your carer communicate with our virtual <p>
                    </p> assist to get the answers you need.
                </h4>
            </div>
            <div class="cc">
                    <img src="./videos/appointment gif.gif" alt=""style="width: 340px; height: 240px;">
                    <a href="">            <h2>
                        <b>
                           Appointments 
                        </b>
                    </h2></a>
                <h4>
                    Schedule appointments with your carer at your <p>
                    </p>convenience. 
                </h4>
            </div>
        </div>
        <div class="branch">
            <div class="cb">
                <video  width="340px" height="260px" controls>
                    <source src="./videos/calendar.mp4" type="video/mp4">
                </video>
                <a href="">                <h2>
                    <b>
                        Calender
                    </b>
                </h2></a>
                <h4>
                    View up coming visits from your carer


                </h4>
            </div>
            <div class="cd">
                
                 <video width="340px" height="260px" controls>
                 <source src="./videos/key chat.mp4" type="video/mp4">
                 </video>
                 <a href="">
                    <h2>
                        <b>
                           Chat 
                        </b>
                    </h2>
                 </a>
                <h4>
                    Schedule appointments with your carer.
                </h4>
            </div>
        </div>
        <div class="care">
            <h2>
                The Best Way to receive care
            </h2>
            <div class="branch">
                <div>
                    <a href="">
                        <i class="fa fa-comments larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Chats
                    </h3>
                    <h5>
                        communicate one-to-one with your selected nurse
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-users larger-icon"  id="fonta"></i>
                    </a>
                    <h3>
                        Carers
                    </h3>
                    <h5>
                        Get assigned a professional health care <p></p> assistant, once registered with a carer you <p></p> have the option to register more.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-tag larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Notificatons
                    </h3>
                    <h5>
                        Send notifications to your carer as and when you are both available.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-heart larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Health Alerts
                    </h3>
                    <h5>
                        In the event of an emergency send an emergency alert to your carer.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-home larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Comfort
                    </h3>
                    <h5>
                        Schedule visits from your nurse straight to your home.
                    </h5>
                </div>
            </div>
            <div>
                <h5>
                    See our features in more detail on our service page
                </h5>
            </div>
        </div>
        
        <div class="second">
            <div class="mission3">
            </div>
            <div class="mission1">
                <h2><b>
                    For those that care
                </b>
                </h2>
                <h4>
                    At SPEC, we're dedicated to empowering caregivers like <p></p>yourself with the tools and resources necessary to excel in your crucial role. <p></p>We recognise the unique challenges you face and understand the pivotal role effective communication <p></p> plays in your caregiving journey.

                    That's why we're committed to providing you with cutting-edge <p></p> communication tools designed specifically to enhance your ability top <p></p> connect with your clients and deliver exceptional care. Our <p></p>platform offers a diverse array of resources tailored to streamline <p></p> your interactions and ensure seamless coordination in your caregiving duties..
                </h4>
            </div>
        </div>
        <div class="branch">

            <div class="cc">
                    <img src="./videos/map.gif" alt=""style="width: 340px; height: auto;">
                    <a href="">                <h2>
                        <b>
                           Maps 
                        </b>
                    </h2></a>
                <h4>
                    A convenient map that allows you to find the exact <p></p> location of your patient.
                </h4>
            </div>
            <div class="ca">
                <video width="340" height="300" controls>
                    <source src="./videos/Chat Bot.mp4" type="video/mp4">
                </video>
                <a href="">
                    <h2>
                        <b>
                            Chat Bot
                        </b>
                    </h2>
                </a>
                <h4>
                    Receive reports and communicate with the chatbot top <p>
                    </p> stay on top of things.
                </h4>
            </div>
        </div>
        <div class="branch">
            <div class="cb">
                <video width="340" height="260" controls>
                    <source src="./videos/alert.mp4" type="video/mp4">
                </video>
                <a href="">                <h2>
                    <b>
                        Alerts
                    </b>
                </h2></a>
                <h4>
                    Receive alerts, events and notifications from your patient.
                </h4>
            </div>
            <div class="cd">
                
                 <video width="340" height="260" controls>
                 <source src="./videos/key chat.mp4" type="video/mp4">
                 </video>
                <h2>
                    <b>
                       Dashboard
                    </b>
                </h2>
                <h4>
                    View your calendar, timetable as well as your performance.
                </h4>
            </div>
        </div>
        <div class="care">
            <h2>
                Best way to Care for Others 
            </h2>
            <div class="branch">
                <div>
                    <a href="">
                        <i class="fa fa-calendar larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Timetables
                    </h3>
                    <h5>
                        Our timetable feature allows you to choose the days you <p></p> are available for full flexibility.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-file larger-icon"  id="fonta"></i>
                    </a>
                    <h3>
                        Reports
                    </h3>
                    <h5>
                        Receive reports generated by our smart chat AI that can <p></p> communicate with your patient in your absence to stay <p></p> on top of your patients needs. 
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-bar-chart larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Stats
                    </h3>
                    <h5>
                        review you performance with our smart AI driven statistics.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-clock-o larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                     Check-In
                    </h3>
                    <h5>
                        Our simple yet effective check in system allows you <p></p>to signal your attendance conveniently <p></p> to your employer.
                    </h5>
                </div>
                <div>
                    <a href="">
                        <i class="fa fa-user larger-icon" id="fonta"></i>
                    </a>
                    <h3>
                        Collaborate
                    </h3>
                    <h5>
                        Our system allows for multiple nurses to be <p></p> assigned to a single patient. 
                    </h5>
                </div>
            </div>
            <div>
                <h5>
                    See our features in more detail on our service page
                </h5>
            </div>
        </div>
        <div class="second">
            <div>
                <div class="mission4">
                    <img src="./Images/logo/last1.jpeg" alt=""style="width: 630px; height: auto;">
                </div>
                <h2>
                    Want to become a Carer?
                </h2>
                <div>
                    <a href="signup-carer.php" class="b2"><b>Sign Up Here</b></a>
                </div>
            </div>
            <div>
                <div class="mission5">
                    <img src="./Images/logo/last2.jpeg" alt=""style="width: 633.5px; height: auto;">
                </div>
                <h2>
                    Need a Carer?
                </h2>
                <div>
                    <a href="signup.php" class="b2"><b>Sign Up Here</b></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="f1">
                <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;">
                <div class="f1">
                    <h2>
                        SPEC
                        <i class="fa fa-plus-circle " id="fonta"></i>
                    </h2>
                </div>
                <h5>
                    Copyright  Blah Blah Blah
                </h5>
                <div class="media">
                    <a href=""><i class="fa fa-facebook " id="fonta"></i></a>
                    <a href=""><i class="fa fa-twitter " id="fonta"></i></a>
                    <a href=""><i class="fa fa-instagram " id="fonta"></i></a>
                    <a href=""><i class="fa fa-linkedin " id="fonta"></i></a>
                    <a href=""><i class="fa fa-youtube " id="fonta"></i></a>
                </div>
            </div>

            <div class="f1">
              <h3>
                Company
              </h3>  
              <div>
              <a href="./About.html">About</a>
              </div><div>
              <a href="">Contact us</a>
              </div><div>
              <a href="./careers.html">Careers</a>
              </div><div>
              <a href="./Advice.html">Culture</a>
              </div><div>
              <a href="./Advice.html">Blog</a>
              </div>
            </div>

            <div class="f1">
                <h3>
                  Support
                </h3>
                <div>
                <a href="">Getting Started</a>
                </div><div>
                <a href="">Help center</a>
                </div><div>
                <a href="">Server status</a>
                </div><div>
                <a href="">Report a bug</a>
                </div><div>
                <a href="">Chat support</a>
               </div>
            </div>


            <div class="f1">
                <h3>
                  Contact us
                </h3>
                <div>
                   <a href=""><i class="fa fa-envelope " id="fonta"></i> contact@company.com</a>
                </div><div>
                    <a href=""><i class="fa fa-phone " id="fonta"></i> (414) 687 - 5892</a>
                </div><div>
                    <a href="">  <i class="fa fa-map-marker " id="fonta"></i>  1234 Rainbow Avenue, <p></p> Fantasia City, Wonderland
                    </a>
                </div>
            </div>
        </footer>
        <div class="f2">
            <div>
                <p>Copyright &copy; 2024.</p>
            </div>
            <div class="f3">
                <p> All rights reserve|<a href="">Terms and Conditions</a>|<a href="">Privacy Policy</a></p>
            </div>
        </div>
      </body>
      </html>