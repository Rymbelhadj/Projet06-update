
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>   
           * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  width: 80%;
  margin: 0 auto;
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
            <img src="assets/img/logo1.png">

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
                                <a class="nav-link text-blue" href="contact.php">à propos de nous</a>
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