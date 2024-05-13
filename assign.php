<?php

// <NAME> IBARHIM SULU-GAMBARI
// <CONTRIBUTION TO THIS PAGE> The entire page apart from the header
// WITH  THE USE OF HTML,CSS and PHP

// (these lines of code start a PHP session)
session_start();

// (these lines of code include the database configuration file)
include('functions/dbconfig.php');

if(isset($_SESSION['patient_id'])) {
    // (these lines of code retrieve the patient ID from the session)
    $patient_id = $_SESSION['patient_id'];

    // Prepare and execute SQL query to fetch carers assigned to the patient
    $query = "SELECT c.FirstName, c.LastName
              FROM assignment a
              INNER JOIN carer c ON a.carer_id = c.carer_id
              WHERE a.patientID = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $patient_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $first_name,$last_name);
}
elseif(isset($_SESSION['carer_id'])) {
    // (these lines of code retrieve the carer ID from the session)
    $carer_id = $_SESSION['carer_id'];

    // Prepare and execute SQL query to fetch patients assigned to the carer
    $query = "SELECT p.FirstName, p.LastName
              FROM assignment a
              INNER JOIN patient p ON a.patientID = p.patientID
              WHERE a.carer_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $carer_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $first_name,$last_name);
}

// Logout functionality
if(isset($_POST['logout']))
{
    // (these lines of code unset and destroy the session upon logout)
    session_unset();
    session_destroy();
    header("Refresh:1; url=index.php"); 
}

?>
<!-- // <NAME> MUHAMMED UMER
// <CONTRIBUTION TO THIS PAGE> THE FRONT-END OF THE  HEADER
// WITH  THE USE OF HTML AND CSS -->

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


<section class="contact-form-wrap section" style="padding-top: 10px; margin-top: 250px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                <h2 class="text-md mb-2"><?php  if(isset($_SESSION['patient_id'])) {echo "Your Carers are:";}elseif(isset($_SESSION['carer_id'])) {echo "Your Patients are:";}?></h2>
                      <?php
            // Display all assigned carers
            while (mysqli_stmt_fetch($stmt)) {
              $assigned_name = $first_name . " " . $last_name;
              echo "<h2 class='text-md mb-2'>$assigned_name</h2>";
            }
            ?>
                </div>
            </div>
        </div>
       
    </div>
</section>





    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
  