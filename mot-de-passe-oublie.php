<?php
session_start();
require 'connexion/dbconnect.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if (isset($_POST['btnSubmit'])) {
    // Get email from the form
    $email_utilisateur = isset($_POST['email_utilisateur']) ? $_POST['email_utilisateur'] : null;

    // Check if the email is not empty
    if (!empty($email_utilisateur)) {
        // Check if the email exists in the database
        $stmt = $connexion->prepare('SELECT COUNT(*) FROM utilisateur WHERE email_utilisateur = ?');
        $stmt->execute([$email_utilisateur]);
        $emailExists = $stmt->fetchColumn();

        if ($emailExists) {
            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            // Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'wassimosbenfraj@gmail.com'; // SMTP username
            $mail->Password = 'skawxctlbjwezlyg'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable SSL encryption
            $mail->Port = 465; // TCP port to connect to

            // Sender and recipient
            $mail->setFrom('wassimosbenfraj@gmail.com', 'ApcPedagogie');
            $mail->addAddress($email_utilisateur); // Add a recipient

            // Email content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Password Reset';
            $mail->Body = 'Please click the link below to reset your password: <br><a href="nouveau-mot-de-passe.php">Reset Password</a>';

            // Send the email
            try {
                $mail->send();
                echo 'Email sent successfully!';
            } catch (Exception $e) {
                echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
            }
        } else {
            echo 'Email not found in the database.';
        }
    } else {
        echo 'Email field is empty.';
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Main css -->
    
</head>
<style>
    /* Reset default margin and padding for all elements */

    body {

    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
}

.forgot{
	    background-color: #fff;
    padding: 12px;
    border: 1px solid #dfdfdf;
}

.padding-bottom-3x {
    padding-bottom: 72px !important;
}

.card-footer{
	background-color: #fff;
}

.btn{ 

	font-size: 13px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #76b7e9;
    outline: 0;
    box-shadow: 0 0 0 0px #28a745;
}
               

</style>
<body>
  <div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="forgot">
          <h2>Forgot your password?</h2>
          <p>Change your password in three easy steps. This will help you to secure your password!</p>
          <ol class="list-unstyled">
            <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
            <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
            <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
          </ol>
        </div>	
        <form class="card mt-4" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="email-for-pass">Enter your email address</label>
              <input class="form-control" type="text" name="email_utilisateur" required=""><small class="form-text text-muted"></small>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-success" type="submit" name="btnSubmit">Get New Password</button>
              <a href="login.php" class="btn btn-danger" >back to login</a>
                    </p>
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>