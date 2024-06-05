

<?php
require_once('connexion/connexion.php');

function chercher_email($mail,$champs){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$mail]); 
  $user = $stmt->fetch();
  if ($user) {
      return true;
  }else{
  return false;
  }
}

function chercher_password($password, $userEmail, $champs){
  global $pdo;
  $stmt = $pdo->prepare("SELECT `id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mot_de_passe` FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$userEmail]); 
  $hash = $stmt->fetch();   
  if (password_verify($password, $hash['mot_de_passe'])) {
    $_SESSION['id_utilisateur']=$hash['id_utilisateur'];
    return true;
  } else {
    return false;
  }
}

session_start();
include('connexion/connexion.php');
if(isset($_POST['connecter'])){
  $uname = $_POST['email_utilisateur'];
  $password = $_POST['mot_de_passe'];
  $remember = isset($_POST['remember']);
  
  if (empty($uname)) {
      $resmail='<div class="alert alert-danger " role="alert">
      Champ Email est obligatoire !</div>';
  }elseif (empty($password)) {
      $respw='<div class="alert alert-danger " role="alert">
      Champ mot de passe est obligatoire !</div>';
  }

  $userEmail = (isset($_POST['email_utilisateur'])) ? $_POST['email_utilisateur'] : null;
  $userPassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : null;

  if(!empty($userEmail) && !empty($userPassword)){
    if (chercher_email($userEmail, 'email_utilisateur')) {
      if (chercher_password($userPassword, $userEmail, 'email_utilisateur')) {
        $_SESSION['id_utilisateur']=$hash['id_utilisateur'];

        // If "remember me" is checked, set a cookie with the user's email
        if ($remember) {
          setcookie('remember_me', $userEmail, time() + (86400 * 30), "/"); // 30 days
        }

        header('Location: indexx.php');
      } else {
        echo '<script type="text/javascript">alert("Le mot de passe est invalide."); </script>';
      }
    } else {
      echo '<script type="text/javascript">alert("L\'email n\'existe pas"); </script>';
    }
  }
}

// If the "remember me" cookie is set, fill in the email field
if (isset($_COOKIE['remember_me'])) {
  $rememberedEmail = $_COOKIE['remember_me'];
  echo "<script>document.getElementsByName('email_utilisateur')[0].value = '$rememberedEmail';</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 
      /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
           
           
    


        </style>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Add necessary CSS and JS files here -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				
				</div>
				<div class="card-body">
					<form action="login.php" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Email" name="email_utilisateur" required>
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Password" name="mot_de_passe" required>
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox" name="remember">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn" name="connecter">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="inscription.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="mot-de-passe-oublie.php">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <div class="g-recaptcha" data-sitekey="skawxctlbjwezlyg"></div>

</body>
</html>
