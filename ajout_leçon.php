
<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Projet 06</title>
        
        <script src="https://kit.fontawesome.com/7e15fc862d.js" crossorigin="anonymous"></script>
        
        <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 
  <link href="../assets/css/style.css" rel="stylesheet">
        <style>   
           * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
 
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 500s;
  border-top: 10px;
}


@keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}

        
.img1{
    width: 1000px;
    border: 3px solid #ccc; /* bordure de l'image */
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */
    margin-top: 20px;

}
.wrapper {
  display: flex;
  align-items: center;
  margin-left: 1000px;
}


.search form {
  display: flex;
}

form {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 10px;
  font-size: 16px;
}



.container {
  
  margin: 0 auto ;
  /* Autres styles de conteneur */
}

h2 {
  font-size: 2em;
  color: #333;
text-align: center;
width: 1000px;
margin-top: 15px;
  /* Autres styles pour le titre h2 */
}
section{
    width: 1200px;
    border: 3px solid #ccc; /* bordure de l'image */
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */
    margin-top: 20px;
    margin-left: 130px;
    padding: 20px;
}
.navbar-brand{
    margin-right: 300px;

}
.card-container {
  display: flex;
  gap: 20px; /* Adds 20px space between cards */
}

.card {

  padding: 5px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */ 
}

.card img {
  max-width: 100%;
  height: auto;
}

footer{
                background-color:darkslategray;
            }
            .copy{
                color:blue;
            }
            .cours{
             
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */  
  color: white;
            }
            h5{
                color: white;
            }
            .copy{
                text-align: center;
            }
            .logofooter{
                text-align: center;
            }
            h4{
                color: orange;
            }
            .col-md-8{
                padding: 50px;
            }

           


            /* Navbar */
.navbar {
  padding: 2;
}

.navbar-brand {
  font-size: 24px;
}

.navbar-nav {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.nav-item {
  margin-right: 10px;
}

.nav-link {
  color: white;
  text-decoration: none;
}



/* Search form */
.form-inline {
  display: flex;
}

.form-inline input[type="text"] {
  padding: 6px;
  border: 1px solid #ccc;
}

.form-inline button {
  padding: 6px 10px;
  border: none;
  background-color: #ff9800;
  color: white;
}

/* Additional styling for demonstration */
body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  margin: 0;
}
.nav-item {
  margin-right: 30px;
}
.nav1{
  margin-left: -250px;
}


        </style>
        
    </head>

    <body>
   


        <div class="row pt-12">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">
                        <ul class="navbar-nav navbar-brand ">
                            <li class="nav-item ">
                              
                                <a class="nav-link text-white" href="#"><i class="fa-solid fa-location-dot"></i> Nous sommes ici</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"> <i class="fa-solid fa-phone"></i> Tél: 216 99 99 99</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"> <i class="fa-solid fa-envelope"></i> Email : apcpedagogie@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <nav class="navbar navbar-expand-sm justify-content-center">
                        <div class="container">
                            <ul class="navbar-nav navbar-brand ">
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="login.php">Se Connecter</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link text-white" a href="inscription.php">S'inscrire</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </nav>
            </div>
        </div>

        <div class="row">
        <div class="col-md-1">
        </div>
        
            <div class="col-md-3">
            <img src="../assets/img/logo1.png">

            </div>
            <div class="col-md-8 pt-4">
            <form class="form-inline ml-auto" method="GET" action="">
  <input type="text" placeholder="Rechercher..."  name="search">
  <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
</form>
                </div>
        </div>
        <div class="wrapper">
  <div class="logo">
  </div>
 
</div>


        <div class="row pt-12">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">>
                    <a class="navbar-brand" href="#"> <i class="fa-solid fa-book" style="color: yellow;"></i> <span style="color: yellow;">apc</span><span style="font-weight: bold;">pedagogie </span></a>
                </div>
                <nav class="navbar navbar-expand-sm justify-content-center">
                    <div class="container">
                        <ul class="navbar-nav navbar-brand ">
                            <li class="nav-item ">
                              <li class="nav1"  >
                                <a class="nav-link text-blue" href="indexx.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="cours.php">Cours et tutoriel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="https://apcpedagogie.com/">Nos ressources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="forum.php">Forums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue " href="contact.php">à propos de nous</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
       <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">

  <img src="assets/img/2.jpg" style="width:100%;margin-top: 30px;">

</div>

<div class="mySlides fade">
 
  <img src="assets/img/3.jpg "style="width:100%;margin-top: 30px;">
  
</div>

<div class="mySlides fade">
 
  <img src="assets/img/4.jpg" style="width:100%;margin-top: 30px;">
 
</div>
<div class="mySlides fade">

  <img src="assets/img/5.jpg" style="width:100%;margin-top: 30px;">

</div>
<div class="mySlides fade">
 
  <img src="assets/img/6.jpg" style="width:100%;margin-top: 30px;">
 
</div> 
</body> 
</html>

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Ajouter un leçon</h1>
                <div data-aos="fade-up" data-aos-delay="600">
                    <?php
                    require_once('connexion/connexion.php');

                    // Initialiser les variables pour stocker les données du formulaire
                    $titre_lecon = $contenu_lecon = $ordre_lecon = $id_chapitre = "";
                    
                    // Vérifie si le formulaire a été soumis
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérer les données du formulaire
                        $titre_lecon = $_POST['titre_lecon'];
                        $contenu_lecon = $_POST['contenu_lecon'];
                        $ordre_lecon = $_POST['ordre_lecon'];
                        $id_chapitre = $_POST['id_chapitre'];
                        

                        // Préparer la requête SQL pour insérer un nouvel utilisateur dans la base de données
                        $sql = "INSERT INTO leçon (titre_lecon, contenu_lecon, ordre_lecon , id_chapitre ) 
                        VALUES (:titre_lecon, :contenu_lecon, :ordre_lecon , :id_chapitre)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':titre_lecon', $titre_lecon);
                        $stmt->bindParam(':contenu_lecon', $contenu_lecon);
                        $stmt->bindParam(':ordre_lecon', $ordre_lecon);
                        $stmt->bindParam(':id_chapitre', $id_chapitre);
                        
                        

                        // Exécuter la requête
                        if ($stmt->execute()) {
                            // Rediriger vers une page de confirmation ou vers la liste des étudiants
                            // header("Location: etudiants.php");
                            // exit();
                        } else {
                            echo "Erreur lors de l'ajout du leçon.";
                        }
                    }
                    ?>
                     
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <table class="table table-striped table-bordered center ">
                            <thead>
                                <tr>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Ordre</th> 
                        <th>Chapitre</th>
                       
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" id="titre_lecon" name="titre_lecon" required></td>
                                    <td><input type="text" id="contenu_lecon" name="contenu_lecon" required></td>
                                    <td><input type="text" id="ordre_lecon" name="ordre_lecon" required></td>
                                    <td><input type="text" id="id_chapitre" name="id_chapitre" required></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
                        <a href="leçon.php" class="btn btn-secondary mt-4">Annuler</a>
                    </form> 
                </div> 
                
              
            </div>
        </div>
    </div>
</section><!-- End Hero -->

