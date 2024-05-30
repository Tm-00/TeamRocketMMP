<?php

// <NAME> IBARHIM SULU-GAMBARI
// <CONTRIBUTION TO THIS PAGE> The entire page apart from the header 
// WITH  THE USE OF HTML,CSS and PHP

// (these lines of code start a PHP session)
session_start();

// (these lines of code include the database configuration file)
include('functions/dbconfig.php');
$patient_id = $_SESSION['patient_id'];

if(isset($_POST['assign'])){  
    // <NAME> SIOBHAN UTETE
    // <CONTRIBUTION TO THIS PAGE> SECURING THE WEBSITE BY SANITIZING AND FILTERING
    // WITH  THE USE OF PHP


    // (these lines of code retrieve the carer ID from the form and sanitize it)
    $carer_id = $_POST['carer'];
    // Check if maximum number of carers reached for the patient
    $check = "SELECT * FROM `assignment` WHERE patientID = ?";
    $stmt = mysqli_prepare($conn, $check);
    mysqli_stmt_bind_param($stmt, "i",$patient_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 2){
        // (these lines of code set an error message if the maximum number of carers is reached)
        $error = "MAXIMUM NUMBER OF CARERS REACHED";
        echo $error;
        header("Refresh: 2; url=index.php");
    }
    else{
        // Insert assignment into database
        $query = "INSERT INTO `assignment` (carer_id, patientID) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ii", $carer_id,$patient_id);
        
        if (mysqli_stmt_execute($stmt)){
            // Redirect to assign.php on successful assignment
            header('Location: assign.php');
        } else {
            // Redirect to index.php on failure
            header('Location: index.php');
        }
    }

    $stmt->close();
    $conn->close();
}

function getRandomCarerID() {
    global $conn;

    // Query to get a random available carer ID
    $sql = "SELECT carer.carer_id
    FROM carer
    LEFT JOIN assignment ON carer.carer_id = assignment.carer_id
    GROUP BY carer.carer_id
    HAVING COUNT(assignment.patientID) <=1
    ORDER BY RAND()
    LIMIT 1";
    
    
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $random_carer_id = $row["carer_id"];
        $result->free();
        return $random_carer_id;
    } else {
        return null;
    }
}
?>
<!-- // <NAME> MUHAMMED UMER
// <CONTRIBUTION TO THIS PAGE> THE FRONT-END OF THE HEADER
// WITH  THE USE OF HTML AND CASS -->

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

<body id="top">


<section class="contact-form-wrap section" style="padding-top: 10px; margin-top: 130px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">CARER REQUEST FORM</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form  action="" method="post">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="patient" id="name" type="text" class="form-control" placeholder = "<?php echo $_SESSION['first']." ".$_SESSION['last'] ?>" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="carer" id="email" type="hidden" value="<?php echo getRandomCarerID()?>" class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="assign" type="submit" value="ASSIGN"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer Start -->


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