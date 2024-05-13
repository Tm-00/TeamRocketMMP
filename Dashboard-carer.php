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
    <title>Document</title>
</head>
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
        background-color: #139b047e;
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
          border-bottom: 2px solid white;
        }
        .button {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 13px;
        color: black;
        border-radius: 5px;
        transition: background-color 0.3s, border-color 0.3s;
        }

        .button:hover {
        background-color: #E8FFE8;
        border: 2px solid #129B04;
        }

        .f1{
            display :flex;
        }
        .buttons a {
            display: block;
            font-size: 12px;

        }
        .card img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 5px 25px;
            display: block;
        }
        label{
            display: block;
            width: 200px;
            background: #129B04;
            color: #E8FFE8;
            padding: 2px;
            margin: 3px;
            border-radius: 5px;
            cursor: pointer;
        }
        input{
            display: none;
        }
        h5{
            color: grey;
            text-decoration: none;
        }
        .hero{
            width: 950px;
            height: 100px;
            margin: 10px;
        }
        #calender{
            width: 100px;
            position: absolute;
        }
        .map{
            width: 90px;
            height: 80vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        iframe{
            width:1000px;
            height:450px;
            margin: 3px;
        }
        .b3{
            width: 200px;
            background: #129B04;
            color: #E8FFE8;
            padding: 5px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .b1{
            display: flex;
        }
        .b1 a{
            margin-left: 100px;
        }
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    text-align: center;
}

header {
    background-color: #45a049;
    color: white;
    padding: 20px;
    text-align: center;
}

main {
    display: flex;
    
    padding: 20px;
}

section {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section h2 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 5px;
}

footer {
    color: white;
    padding: 20px;
    text-align: center;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin: 0 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

.member {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.member img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.member p {
    font-weight: bold;
}

#assignedPatient {
    margin-top: 20px;
}
.me{
    display: block;
    text-align: center;
    margin:20%;

}
#team{
    display: flex;
}
#options{
    margin-left: 10px;
}




</style>
<body>
    <div class="H1">
        <div>
            <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;">
        </div>
        <div>
            <nav>
                <a href="./index.php"><b>Home</b></a>
                <a href="./careers.html"><b>Careers </b></a>
                <a href="./testimonial.html"><b>Testimonials </b></a>
                <a href="./Advice.html"><b>Advice </b></a>
                <a href="./About.html"><b>About Us </b></a>
            </nav>
              
        </div>
        <div>
            <nav>
            <form method="post">
                            <button type="submit" name="logout" class="logout-btn" >Log Out</button>
                        </form>
            </nav>
        </div>
        
    </div>
    <div class="f1">
        <div class="buttons">
            <div class="her">
                <div class="card">
                    <img src="./Images/logo/logo.png" id="profile-pic">
                    
                    <input type="file" accept="image/jpeg, image/png, image/jpg" id="Input-file">
                </div>
            </div>


            <a href="appointment.php" class="button"><b>Events</b></a>
            <a href="#" class="button" onclick="showMap()" on><b>Map</b></a>
            <a href="assign.php" class="button" ><b>Show Patients</b></a>
            <a href="#" class="button" onclick="showSetting()" on><b>Settings</b></a>
            <h5>
                Social Links
            </h5>
            <a href="#" class="button"><b>Communities </b></a>
            <a href="#" class="button"><b>Gmail</b></a>

        </div>
        <div id="dashboard">

            
        </div>
    </div>
    <script>
        
        
        let profilePic =document.getElementById("profile-pic");
        let inputFile =document.getElementById("Input-file");
        inputFile.onchange=function() {
            profilePic.src =URL.createObjectURL(inputFile.files[0]);
        }

        const showMessages = () => {
            document.getElementById('dashboard').innerHTML =  `
                <div>
        my bro
    </div>
            `;
        }; 
        const showNotifications = () => {
            document.getElementById('dashboard').innerHTML =  `
            hey
            `;
        }; 
        const showEvents = () => {
            document.getElementById('dashboard').innerHTML =  `
                <div>
        what
    </div>
            `;
        }; 
        const showMap = () => {
            document.getElementById('dashboard').innerHTML =  `
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d77540.68402658866!2d-2.172699!3d52.603125!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1713146203771!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="b1">
                <a href="https://maps.app.goo.gl/6u877E5CLitRQx3A6" class="b3"><b>Veiw current location</b></a>
                <a href="https://maps.app.goo.gl/mWAvDPfy7L97Eqvb7" class="b3"><b>Add pin</b></a>
                <a href="https://maps.app.goo.gl/mWAvDPfy7L97Eqvb7" class="b3"><b>Clear pin</b></a>
            </div>
            `;
        }; 
        const showManage = () => {
            document.getElementById('dashboard').innerHTML =  `

            `;
        }; 

        const showSetting = () => {
            document.getElementById('dashboard').innerHTML =  `
            <div class="her">
                <div class="card">
                    <label for="Input-file">Update Image</label>
                    <input type="file" accept="image/jpeg, image/png, image/jpg" id="Input-file">
                </div>
            </div>
            `;
        }; 
        $(document).ready(function() {
    $('#calendar').evoCalendar({

    })})


    </script>



</body>

</html>

