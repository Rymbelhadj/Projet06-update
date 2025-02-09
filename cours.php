
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           /* Style de base pour la page */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}



/* Style pour le titre principal */
h1 {
  font-size: 32px;
  margin: 0;
}

/* Style pour la navigation */
nav ul {
  list-style: none;
  margin: 10;
  padding: 10;
  text-align: center;
}

nav li {
  display: inline-block;
  margin-right: 40px;

}

nav li a {
  color: blue;
  text-decoration: none;
}

/* Style pour le contenu principal */
main {
  margin: 20px;
}

/* Style pour les sections */
section {
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
  padding-bottom: 20px;
}

/* Style pour le pied de page */
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


.card-container {
  display: flex;
  gap: 20px; /* Adds 20px space between cards */
  
}

.card {

  padding: 20px;
  text-align: center;

}

.card img {
  max-width: 100%;
  height: auto;

}


h1 {
  font-size: 35px;
  color: hsl(30, 100%, 50%);
  margin-bottom: 10px;
  text-align: center;
}

nav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

nav ul li {
  display: inline-block;
  margin-right: 10px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  padding: 5px 10px;
  border-bottom: 2px solid transparent;
  transition: border-color 0.3s ease;
}

nav ul li a:hover {
  border-color: #ff9800;
  color: #ff9800;
}
.centered {
    text-align: center;
  }
  .navb1{
    background-color: #343a40!important;

  }




        </style>
    </head>

    <body>
    <?php require_once("header.php");?>

    <nav class="navb1">
      <div class="centered">
  <h1>LES COURS</h1>
  <ul>
    <li><a href="les-cours-programmations.php">les cours de programmation</a></li>
    <li><a href="Architecture-des-ordinateurs.php">Architecture des ordinateurs</a></li>
    <li><a href="administration-et-sécurité-des-sites web.php">administration et sécurité des sites web</a></li>
  </ul>
</div>
    <main>

    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">cours programmation </h3>
        <img src="assets/img/cours1.jpg" alt="Image 3"> 
        <p> L’informatique est le domaine d’activité scientifique, technique et industriel concernant le traitement automatique de l’information par des machines telles que : calculateur, système embarqué, ordinateur, console de jeux vidéo, robot, automate, etc. [Wikipedia]
 <ul>Pourquoi de l’informatique ?</ul>
   <li>Domaine scientifique omniprésent</li>
   <li>Une diversité thématique insoupçonnée</li>
   <li>Vecteur de progrès technologiques, science de société</li>
</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Architecture des ordinateurs </h3>
        <img src="assets/img/architecture-des-ordinateurs.jpg" alt="Image 3">
        <p>L’architecture des ordinateurs est l’étude et la description du fonctionnement des composants internes d’un ordinateur. Elle traite : du type des informations manipulées et de leur codage, du dialogue entre composants et du fonctionnement logique (pas électronique) interne des composants</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">administration et sécurité des sites web</h3>
        <img src="assets/img/administration et sécurité des sites web .jpg" alt="Image 3">
<p>Lorsqu’une adresse Web (ou URL) est tapée dans un navigateur Web, ce dernier établit une connexion au service Web s’exécutant sur le serveur à l’aide du protocole HTTP. Les URL (Uniform Resource Locator) et les URI (Uniform Resource Identifier) sont les noms que la plupart des utilisateurs associent aux adresses Web.
</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    </main>
    
  <footer>
            <div class="container">
                <div class="row pt-4">
                    <div class="col-sm-4">
                        <div class="card-dark" >
                            <div class="card-body">
                                <h5>Les cours de programmation</h5>
                                <p class="cours">L'informatique est le domaine d'activité scientifique, technique et industriel concernant le
                                    traitement automatique de l'information par des machines tels que : calculateur, système embarqué, ordinateur, console de jeux vidéo, robot,
                                    automate, etc [Wikipédia].
                                    Ce cours va vous initier aux bases du Visual Net, aucun prérequis n'est demandé : il n'est pas nécessaire de connaitre le moindre langage,
                                    tout vous sera expliqué. Ce cour est destiné sans limite d'age à tout internautes qui veut se former ou mettre à jour ses connaissances
                                    en informatique.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-dark">
                            <div class="card-body">
                                <h5 class="card-title text-white">Le management de projet</h5>
                                <p class="cours">Le management de projet s'est révélé etre la méthode la plus efficace pour fournir des produits dans
                                    le cout, le calendrier et les contraintes de ressources.
                                    Cette série intensive et pratique de cours vous donne les compétences nécessaires pour que vos projets soient réalisés dans les délais et le
                                    budget tout en donnant à l'utilisateur le produit qu'il attend. Vous obtiendrez une solide connaissance pratique des bases de gestion de 
                                    projets et pourrez utiliser immédiatement ces connaissances pour gérer efficacement lrd projets de travail. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-dark" >
                            <div class="card-body">
                                <h5 class="card-title text-white">L'approche Par Compétences</h5>
                                <p class="cours">Axer l'apprentissage sur des mises en situation techniques et/ou professionnelles qui devront permettre
                                    à l'apprenant d'aborder un (ou des) métiers dans ses dimensions opérationnelles.
                                    L'approche par compétences : Il s'agit de conjuger "savoir", "savoir-etre" et "savoir-faire" de l'apprenant.
                                    Le formateur s'engage dans une classification des objectifs à atteindre, en allant du plus simple au plus complexe.
                                    L'évaluation des apprentissages porte les comportements observables, elle peut-etre de type formatif, sommatif ou critérié.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
<div class="logofooter">
            <i class="fa-brands fa-facebook-f" style="color: #1ba4c0;"></i>
            <i class="fa-solid fa-g" style="color: #d51010;"></i>
            <i class="fa-brands fa-twitter" style="color: #1da0d7;"></i>
            <i class="fa-brands fa-youtube" style="color: #da0b0b;"></i>
            </div>
            <div class="copy"> 
                ©Copyright 2016 -apcpedagogie 
            </div>
        </footer>
  </body>
</html>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
    


    </body>
</html>
