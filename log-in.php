<?php
// <NAME> IBRAHIM SULU-GAMBARI, SIOBHAN UTETE
// <CONTRIBUTION TO THIS PAGE> ALL THE PHP PRESENT HERE
// WITH  THE USE OF PHP
include('functions/dbconfig.php');
session_start();
$msg = "";

if (isset($_GET['verification'])) {
  $verification_code = $_GET['verification'];
  
  $patient_query = "SELECT * FROM patient WHERE verify='$verification_code'";
  $patient_result = mysqli_query($conn, $patient_query);
  

  $carer_query = "SELECT * FROM carer WHERE verify='$verification_code'";
  $carer_result = mysqli_query($conn, $carer_query);
  
  if (mysqli_num_rows($patient_result) > 0) {
      $query = mysqli_query($conn, "UPDATE patient SET verify='' WHERE verify='$verification_code'");
      
      if ($query) {
          $msg = "<div class='alert alert-success'>Patient account verification has been successfully completed.</div>";
      }
  } elseif (mysqli_num_rows($carer_result) > 0) {
      $query = mysqli_query($conn, "UPDATE carer SET verify='' WHERE verify='$verification_code'");
      
      if ($query) {
          $msg = "<div class='alert alert-success'>Carer account verification has been successfully completed.</div>";
      }
  } else {
      header("Location: index.php");
  }
}



if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the email exists in the patient table
  $patient_sql = "SELECT * FROM patient WHERE Email='$email'";
  $patient_result = mysqli_query($conn, $patient_sql);

  // Check if the email exists in the carer table
  $carer_sql = "SELECT * FROM carer WHERE Email='$email'";
  $carer_result = mysqli_query($conn, $carer_sql);

  if (mysqli_num_rows($patient_result) > 0) {
      $row = mysqli_fetch_assoc($patient_result);
      $hashed_password = $row['Password'];

      // Compare the plain-text password provided by the user with the hashed password stored in the database using password_verify
      if (password_verify($password, $hashed_password)){
          if (empty($row['verify'])) {
            $_SESSION['patient_id'] = $row['patientID'];
            $_SESSION['first'] = $row['FirstName'];
            $_SESSION['middle'] = $row['MiddleName'];
            $_SESSION['last'] = $row['LastName'];
            $_SESSION['dob'] = $row['DOB'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['address'] = $row['Address'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['number'] = $row['PhoneNumber'];
            $_SESSION['health'] = $row['Health'];
            header("Location: index.php");
            exit(); // Stop execution after redirect
          } else {
              $msg = "<div class='verification-message'>First verify your account and try again.</div>";
          }
      } else {
          $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
      }
  } elseif (mysqli_num_rows($carer_result) > 0) {
      $row = mysqli_fetch_assoc($carer_result);
      $hashed_password = $row['Password'];

      // Compare the plain-text password provided by the user with the hashed password stored in the database using password_verify
      if (password_verify($password, $hashed_password)){
        if (empty($row['verify'])) {
          $_SESSION['carer_id'] = $row['carer_id'];
          $_SESSION['first'] = $row['FirstName'];
          $_SESSION['middle'] = $row['MiddleName'];
          $_SESSION['last'] = $row['LastName'];
          $_SESSION['gender'] = $row['Gender'];
          $_SESSION['address'] = $row['Address'];
          $_SESSION['email'] = $row['Email'];
          $_SESSION['number'] = $row['PhoneNumber'];
          $_SESSION['job'] = $row['job'];
          $_SESSION['experience'] = $row['experience'];
          header("Location: index.php");
          exit(); // Stop execution after redirect
      } else {
          $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
      }
  } else {
      $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
  }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  display: flex;

}  
nav a:hover {
  border-bottom: 2px solid white;
}

nav {
  overflow: hidden;
  text-align: center;
  margin-left: 90px;
  padding-left: 10px;
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

  .flex{
  display: flex;
background-color: #139b047e;
}
  
  
.first{
  background-image: url('./Images/logo/Login.jpeg');
  background-size: cover;
  padding-right:400px;
  padding-bottom:538.5px;
  } 
nav a {
  
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding-top: 10px;
  padding-bottom: 5px;
  margin-left: 12px;
  text-decoration: none;
  transition: border-bottom 0.3s; 
  border-bottom: 2px solid transparent; 
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

  
.login {
  max-width: 900px;
  margin: 10px 20px ;
  padding: 90px 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

input[type="text"],
input[type="password"] {
  width: 350px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type="submit"]{
  color: white;
  width: 100px;
  height: 40px;
  background-image: linear-gradient(to bottom, #129B04,#063501 );
  border-radius: 8px;
}


.links {
  margin-top: 10px;
}
.links a {
  color: #129B04;
  margin: 10px 0px;
}
h2{
  background-image: linear-gradient(to right, #129B04,#063501 );
  background-clip:text;
  -webkit-text-fill-color: transparent; 
  font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  margin: 20px;
}
.me{
  margin: 11px 5px;
}
</style>
<body>
    <div class="first">
        <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;">
    </div>
    <div>
        <div class="flex">
            <div>
            <nav>
                <a href="index.php"><b>Home</b></a>
                <a href="./careers.html"><b>Careers </b></a>
                <a href="./testimonial.html"><b>Testimonials </b></a>
                <a href="./Advice.html"><b>Advice </b></a>
                <a href="./About.html"><b>About Us </b></a>
              </nav>
            </div>
            <div>
                <nav>
                  <a href="signup.php"><b>Not a member? Sign Up </b></a>
                </nav>
            </div>
            
        </div>

          <h2>Login</h2>
        <div class="login">
          <?php   echo $msg; ?>
            <form action="" method="post" class="block">
              <label for="email"><h4><b>Email:</b></h4></label>
              <input type="text" id="email" name="email" placeholder="">
              <label for="password"> <h4> <b>Password:</b> </h4></label>
              <input  type="password" id="password" name="password" placeholder="">
              <div>
              <input type="submit" name= "login" value="Login" style="font-size: large;">
              </div>
            </form>
            <div class="links">
              <div>
                <a href="forgot.php"><h5><b>Forgotten Password?</b></h5></a>
              </div> 
              <div>
                <a href="signup-carer.php"><h5><b>Sign Up to be a Carer</b></h5></a>
              </div>
              <div>
                 <h5>Having trouble login?</h5><a href="#"><h5>Read our FAQ</h5></a>
              </div>
            </div>
        </div>
          
    </div>
</body>
</html>