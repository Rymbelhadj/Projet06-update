
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

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

tbody tr:hover {
  background-color: #ddd;
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
    <h1>Architecture des ordinateurs : </h1>
    <main>
      <section class>
        <h2 >Les composants d’un PC :</h2> <br>
        <img src="assets/img/Les-composants-d’un-ordinateur.jpg" alt="Image 3"> <br>
        <p>Les périphériques sont classés en 3 types : on distingue les périphériques de sortie, des périphériques d’entrée ou périphériques d’entrée sortie.</p>

    <li>Un ordinateur peut réaliser des tâches variées et qui peuvent être complexes. Il peut transmettre des données et il peut également calculer. Les éléments matériels composant un ordinateur peuvent être essentiels ou périphériques (optionnel). La tour de l’ordinateur contient tous les éléments matériels essentiels.</li><br>
    <li> L’unité centrale ou le boitier contient les éléments essentiels de l’ordinateur.A cette unité centrale se branchent le clavier, l’écran et la souris etc…</li><br>
     <li>Les périphériques peuvent être soit essentiels soit dispensables.</li><br>
     <li>Les périphériques sont classés en 3 types : entrant ou sortant ou sortant et entrant.</li> <br>

        <h3>Exercices le panneau d’entrées/sorties Série 01 :</h3>
        <br>
        <h4> Exercice 01 :  </h4>
         <br>
         <li>Dresser dans le tableau ci-dessous le nom de chacun des composants du panneau d’entrées/sorties illustrée dans la figure-ci-dessous. </li> <br>
         <img src="assets/img/Panneau-dentrées-sorties1.jpg" alt="Image 3"> <br>
         <table>
    <thead>
      <tr>
        <th>Composant</th>
        <th>Numéro</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>IEEE 1394</td>
        <td></td>
      </tr>
      <tr>
        <td>Port clavier PS/2</td>
        <td></td>
      </tr>
      <tr>
        <td>DVI	</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Micro</td>
        <td></td>
      </tr>
      <tr>
        <td>Souris PS/2 (vert)</td>
        <td></td>
      </tr>
      <tr>
        <td>Sortie SPDIF coaxiale</td>
        <td></td>
      </tr>
      <tr>
        <td>Port pour carte graphique vidéo</td>
        <td></td>
      </tr>
      <tr>
        <td>Réseau RJ-45 (LAN)</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Sortie haut-parleur central/haut-parleur graves (jaune orangé)</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Sortie haut-parleur arrière (noir)</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Sortie de ligne (vert citron)	</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Entrée de ligne (bleu clair)</td>
        <td></td>
      </tr>
      <tr>
        <td>USB 2.0 : 4	</td>
        <td></td>
      </tr>
      <tr>
        <td>Entrée coaxiale SPDIF</td>
        <td></td>
      </tr>
      <tr>
        <td>Audio : Sortie haut-parleur latéral (gris)</td>
        <td></td>
      </tr>
    
    </tbody>
  </table>
       </section>


      <section>
      <h4> Exercice 02 :  </h4>
         <br>
         <li>Dresser dans le tableau ci-dessous le nom de chacun des composants du panneau d’entrées/sorties illustrée dans la figure-ci-dessous. </li> <br>
         <img src="assets/img/connecteur-entree-sortie.jpg" alt="Image 3"> <br>
         <table>
    <thead>
      <tr>
        <th>Composant</th>
        <th>Numéro</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ports LAN doubles avec LED pour indiquer l’état</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Port eSATA</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Port Audio	</td>
        <td>9</td>
      </tr>
      <tr>
        <td>Port USB 2.0</td>
        <td>2</td>
      </tr>
      <tr>
        <td>Bouton Clear CMOS</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Sortie SPDIF optique</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Port IEE1394a (Firewire)</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Sortie SPDIF coaxiale</td>
        <td>4</td>
      </tr>
      <tr>
        <td>Port clavier PS / 2</td>
        <td>1</td>
      </tr>
      </tbody>
  </table>
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
