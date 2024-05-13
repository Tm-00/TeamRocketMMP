<?php

include('dbconfig.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$msg = "";


if (isset($_POST['register'])) {
    $firstName = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $verify = md5(rand());
    $middleName = filter_var($_POST['middle_name'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $c_email = filter_var($_POST['confirm_email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);;
    $number = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $userType = $_POST['user'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
    $experience = filter_var($_POST['experience'], FILTER_SANITIZE_STRING);
    

    // Check if passwords match
    if ($password !== $cpassword && $email !== $c_email) {
        $error_message = 'Passwords do not match';
        echo $error_message;
    } else {
        
            $check = "SELECT * FROM `carer` WHERE FirstName = ? AND LastName = ? AND Email= ?";  
            $stmt = mysqli_prepare($conn, $check);        
        
        mysqli_stmt_bind_param($stmt, "sss",$firstName, $lastName ,$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0){
            $error = "Account already exists";
            echo $error;
            header("Refresh: 2; url=log-in.php");
            exit();
        } else {
            // Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `carer` (FirstName,LastName,MiddleName,Gender,Address,Password,Email,PhoneNumber,Job,Experience, verify) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, "sssssssssss", $firstName,$lastName,$middleName,$gender,$address,$hashed_password,$email,$number,$job,$experience,$verify);
            
            
            // Execute the query
            if (mysqli_stmt_execute($stmt)){
                
                echo "<div style= 'display: none;'>";
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'fazezoldyk@gmail.com';                     //SMTP username
                    $mail->Password   = 'josy cwvb ekxq uesm';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('fazezoldyk@gmail.com');
                    $mail->addAddress($email); 
                  
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Click this link to verify your email address and login <b><a href="http://localhost/TeamRocketMMP-main2/log-in.php?verification='.$verify.'">http://localhost/TeamRocketMMP-main2/log-in.php?verification='.$verify.'</a></b>';
                    

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                
                $msg = "<div class='verification-message'>We've sent a verification link to your email address.</div>";
                
            } else {
                // Display error message if signup failed
                $error_message = 'Signup failed';
                echo $error_message;
            }
        }
    }
    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>