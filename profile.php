<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formationweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the user's profile from the database
$sql = "SELECT * FROM utilisateur WHERE id_utilisateur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nom_utilisateur = $row['nom_utilisateur'];
    $email_utilisateur = $row['email_utilisateur'];
    $mot_de_passe = $row['mot_de_passe'];
} else {
    echo "No profile found";
}

$conn->close();
?>
<style>
    .container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #ccc;
}

.form-control {
  width: 100%;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.btn-primary {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-default {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #f0f0f0;
  color: #333;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-group {
  margin-bottom: 20px;
}

.form-horizontal .control-label {
  text-align: left;
}

.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}

.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}

.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .2;
}

.close:hover {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: .5;
}

.avatar {
  width: 100px;
  height: 100px;
  margin-bottom: 10px;
}

.text-center {
  text-align: center;
}

.upload-label {
  margin-top: 10px;
  font-size: 14px;
}

.toggle-password {
  position: relative;
  float: right;
  margin-left: -25px;
  margin-top: -30px;
  cursor: pointer;
  z-index: 2;
}

.toggle-password:before {
  content: "\f06e";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ccc;
}

.toggle-password.active:before {
  content: "\f070";
  color: #007bff;
}

/* Additional custom styles can be added here */

</style>
<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <form method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <input type="text" class="form-control" name="nom_utilisateur" id="nom_utilisateur" placeholder="Your Name" value="<?php echo $nom_utilisateur; ?>" required/>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email_utilisateur" id="email_utilisateur" placeholder="Your Email" value="<?php echo $email_utilisateur; ?>" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="mot_de_passe" id="mot_de_passe" placeholder="Password" value="<?php echo $mot_de_passe; ?>" required/>
            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirmepassw" id="confirmepassw" placeholder="Repeat your password" required/>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="submit" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
        </div>
    </form>
</div>
<hr>
