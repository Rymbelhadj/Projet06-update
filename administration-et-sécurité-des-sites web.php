
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
  text-align: center;
  color: hsl(30, 100%, 50%);;
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
h2,h3,h4 {
  color: #1da0d7;
}








        </style>
    </head>

    <body>
    <header>
    <div class="row pt-12">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">
                    <a class="navbar-brand" href="menu.php"> <i class="fa-solid fa-book" style="color: yellow;"></i> <span style="color: yellow;">apc</span><span style="font-weight: bold;">pedagogie </span></a>
                </div>
                <nav class="navbar navbar-expand-sm justify-content-center">
                    <div class="container">
                        <ul class="navbar-nav navbar-brand ">
                            <li class="nav-item ">
                              <li class="nav1"  >
                                <a class="nav-link text-blue" href="menu.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="cours.php">Cours et tutoriel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">Nos ressources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">Forums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">à propos de nous</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
      
      <nav>
      </nav>
    </header>
    <h1>administration et sécurité des sites web </h1>
    <main>
      <section class>
        <h2 >Administration et sécurité web :</h2> <br>
        <img src="assets/img/Administration-et-sécurité-des-sites-web.png" alt="Image 3"> <br>
        <p>Le protocole HTTP (Hypertext Transfer Protocol), l’un des protocoles de la suite TCP/IP, a été à développé l’origine pour publier et extraire des pages HTML. Il est à présent utilisé pour les systèmes d’information collaboratifs distribués. Le protocole HTTP est utilisé à travers le Web pour le transfert des données et constitue l’un des protocoles d’application les plus utilisés.</p>
        <p>Le protocole HTTP constitue un protocole de requête/réponse. Lorsqu’un client (généralement un navigateur Web) envoie une requête à un serveur, le protocole HTTP définit les types de messages que le client utilise pour demander la page Web, ainsi que les types de messages que le serveur utilise pour répondre. Les trois types de messages courants sont GET, POST et PUT.
           Ce cours présente les principaux aspects de: <br>
           <li>la sécurité des systèmes</li><br>
           <li> et la sécurité des réseaux</li><br>
           Il présente <br>
           <li>les problèmes généraux de sécurité</li><br>
           confidentialité, intégrité, authentification, protection, non répudiation <br>
     <li>et les solutions types connues</li> <br>
     <li>la mise en œuvre de ces solutions dans l’architecture Internet</li> <br>

  
        
        
        
        
        </p>

  

        <h3>Les XSS : applications :</h3>
        <br>
        <h4> Injection du HTML : </h4>
         <br>
         <li>créer une page dont l’extension est php et l’enregistrer dans le dossier C:\wamp64\www\securite.</li>
         <li>Recopier les lignes de code suintes:</li>
          <br>
         <img src="assets/img/applications-securite-web.jpg" alt="Image 3"> 
         <br>
         <li>La recherche d’un mot n’affiche aucun résultat, c’est tout à fait normal mais ça ne va pas nous gêner pour cette petite démonstration.</li>
         <li>Chercher le mot "test", que remarquer vous?</li> 
         <br>
         <li>Maintenant testons avec <.h1>test</.h1></li> 
         <br>
         <li>Nous obtiendrons</li> 
         <br>
         <img src="assets/img/applications-securite-web-1.jpg" alt="Image 3"> <br>
         <li><.h1>test<./h1> c’est le mot-clé que nous avons entré dans le formulaire. Le navigateur reçoit le résultat et tombe sur <.h1>test<./h1>. Pour lui il s’agit d’une balise HTML, il va donc l’interpréter comme telle d’où le mot test en tant que titre.
Testons avec, par exemple, <.h1 style="color:red;"><.u>test<./u></.h1> pour vérifier notre théorie (le mot recherché devrait alors être affiché en tant que titre, souligné et en rouge).</li> 
         <br>

         <h4>Injection du JAVASCRIPT : </h4>
         <li>Le JavaScript en est un autre et va nous permettre de pousser notre exploitation un peu plus loin car le fait est que le HTML est un langage de balisage alors que JavaScript est un vrai langage de programmation, ce qui va nous permettre de faire des choses très intéressantes.</li> 
         <br>
         <li>Pour faire comprendre au navigateur que nous voulons qu’il interprète le code comme du JavaScript nous plaçons nos instructions entre la balise <script></script>. Nous verrons aussi par la suite comment on peut éventuellement se passer de cette balise dans le cas où le site vulnérable la filtrerait.</li> 
         <br> 
         <li>Un cas classique est de tenter d’afficher une fenêtre d’alerte. 
(http ://localhost/xss.php ?keyword= <.script>alert("Coucou tu veux voir ma... faille XSS ?") ;<./script>)</li>
 <br>
         <li>Ce qui affiche :</li> <br>
         <img src="assets/img/applications-securite-web-2.jpg" alt="Image 3"> <br>
      
    
       </section>


     


      
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
