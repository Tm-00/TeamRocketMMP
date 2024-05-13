<?php

// <NAME> IBRAHIM SULU-GAMBARI, SIOBHAN UTETE
// <CONTRIBUTION TO THIS PAGE> ALL THE PHP PRESENT HERE
// WITH  THE USE OF PHP
include('functions/signup-carer.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      * {
          text-decoration: none;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }

      body {
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
  background-image: url('Images/sign.jpeg');
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
          max-width: 700px;
          margin: 10px 0px;
          padding: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          background-color: #f9f9f9;
      }

      .input-group {
          display: flex;
          align-items: center;
          margin-bottom: 20px; /* Increased margin between input groups */
      }

      .input-group label {
          flex: 1;
          margin-right: 10px;
      }

      .input-group input,
      .input-group select,
      .input-group textarea {
          flex: 2;
          width: calc(100% - 40px);
          padding: 10px;
          margin: 8px 0;
          border: 1px solid #ccc;
          border-radius: 20px;
          box-sizing: border-box;
      }

      .input-group .radio-group {
          flex: 2;
          display: flex;
          align-items: center;
      }

      .input-group .radio-group label {
          margin-right: 20px;
      }

      input[type="submit"] {
          color: white;
          width: 100px;
          height: 40px;
          background-image: linear-gradient(to bottom, #129B04, #063501);
          border-radius: 20px;
          border: none;
          cursor: pointer;
      }

      input[type="submit"]:hover {
          background-image: linear-gradient(to bottom, #063501, #129B04);
      }

      .links {
          margin-top: 10px;
      }

      .links a {
          color: #129B04;
          margin: 10px 0px;
      }

      h2 {
          background-image: linear-gradient(to right, #129B04, #063501);
          background-clip: text;
          -webkit-text-fill-color: transparent;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          margin: 20px;
      }

      .home-link {
          border-bottom: 2px solid #129B04;
      }

      .others {
          border-bottom: 2px solid #A9A9A9;
      }

    .verification-message {
        background-color: #007bff; /* Blue background color */
        color: white; /* White text color */
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        width: 700px; /* Match the width of the signup block */
    }

    .verification-message p {
        margin: 0; /* Remove default margin */
    }


    </style>
</head>

<body>
<div class="first">
    <img src="logo.png" alt="" style="width: 50px; height: auto;">
</div>
<div>
    <div class="flex">
        <div>
            <nav>
                <a href="./index.html" class="home-link"><b>Home</b></a>
                <a href="#" class="others"><b>Careers </b></a>
                <a href="#" class="others"><b>Service </b></a>
                <a href="#" class="others"><b>Advice </b></a>
                <a href="#" class="others"><b>Donate </b></a>
                <a href="#" class="others"><b>Contact us </b></a>
            </nav>
        </div>
        <div>
            <nav>
                <a href="log-in.php"><b>Already a member? Login</b></a>
            </nav>
        </div>

    </div>

    <h2>Sign-up to be a Carer </h2>
    <?php echo $msg; ?>
    <div class="login">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <div>
                    <label for="first_name"><b>First Name:</b></label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
                <div>
                    <label for="middle_name"><b>Middle Name:</b></label>
                    <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name">
                </div>
                <div>
                    <label for="last_name"><b>Last Name:</b></label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="input-group">
             
              <div>
                  <label><b>Gender:</b></label>
                  <div class="radio-group">
                      <input type="radio" id="male" name="gender" value="male">
                      <label for="male">Male</label>
                      <input type="radio" id="female" name="gender" value="female">
                      <label for="female">Female</label>
                      <input type="radio" id="other" name="gender" value="other">
                      <label for="other">Other</label>
                  </div>
              </div>
          </div>          
          
            <div class="input-group">
                <div>
                    <label for="address"><b>House Address:</b></label>
                    <input type="text" id="address" name="address" placeholder="House Address" required>
                </div>
                <div>
                    <label for="phone"><b>Phone Number:</b></label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="input-group">
                <div>
                    <label for="email"><b>Email:</b></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div>
                    <label for="confirm_email"><b>Confirm Email:</b></label>
                    <input type="email" id="confirm_email" name="confirm_email" placeholder="Confirm Email" required>
                </div>
            </div>
            <div class="input-group">
                <div>
                    <label for="password"><b>Password:</b></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <label for="confirm_password"><b>Confirm Password:</b></label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="input-group">
                <div>
                    <label for="health_info"><b>Tell us where you've worked:</b></label>
                    <textarea id="health_info" name="job" placeholder="Job Information"></textarea>
                </div>
                <div>
                <label for="experience"><b>Years of Experience:</b></label>
                    <select id="experience" name="experience">
                        <option value="0-2">0-2</option>
                        <option value="3-6">3-6</option>
                        <option value="7+">7+</option>
                    </select>
                </div>
            </div>
            <div>
                <input type="submit" name="register" value="Sign Up">
            </div>
        </form>
    </div>

</div>
</body>
</html>

