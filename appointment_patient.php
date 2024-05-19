<?php

// Start a PHP session
session_start();

// Include the database configuration file 
include('functions/dbconfig.php');

// Get the patient ID from the session
$patient_id = $_SESSION['patient_id'];

// Prepare and execute SQL query to fetch appointments for the patient with carer information
$query = "SELECT a.*, c.FirstName AS CarerFirstName, c.LastName AS CarerLastName, c.Email AS CarerEmail, c.PhoneNumber AS CarerPhone 
          FROM appointment a 
          INNER JOIN carer c ON a.carer_id = c.carer_id
          WHERE a.patientID = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $patient_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


?>

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

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body id="top">

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">YOUR APPOINTMENTS </span>
          <h1 class="text-capitalize mb-5 text-lg">Appointment Requests</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
    <h2>Your Appointments</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <form action="" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Carer's First Name</th>
                            <th>Carer's Last Name</th>
                            <th>Carer's Email</th>
                            <th>Carer's Phone</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['appointment_id']; ?></td>
                            <td><?php echo $row['CarerFirstName']; ?></td>
                            <td><?php echo $row['CarerLastName']; ?></td>
                            <td><?php echo $row['CarerEmail']; ?></td>
                            <td><?php echo $row['CarerPhone']; ?></td>
                            
                            
                                <?php if ($row['time'] == '00:00:00'): ?>
                                  <td>TBD</td>
                                  <td>TBD</td>
                                <?php else: ?>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['time']; ?></td>
                                <?php endif; ?>
                            
                        </tr>
                    </tbody>
                </table>
            </form>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No appointments found.</p>
    <?php endif; ?>
</div>

<!-- footer Start -->

<!-- Essential Scripts -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="js/script.js"></script>
<script src="js/contact.js"></script>

</body>
</html>
