
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
    <h1>les cours de programmation : PHP/HTML/CSS </h1>
    <main>
      <section class>
        <h2 >PHP :</h2>
        <p>" PHP: Hypertext Preprocessor, plus connu sous son sigle PHP (acronyme récursif), est un langage de scripts libre principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n’importe quel langage interprété de façon locale, en exécutant les programmes en ligne de commande. PHP dispose depuis la version 5 de fonctionnalités objet complètes. En raison de la richesse de sa bibliothèque, on désigne parfois PHP comme une plate-forme plus qu’un simple langage.”</p>
        <BR>
       <h3> Exercices les fonctions en php : Série 01 :</h3>
        <br>
        <p>
       <h4> Exercice 01 :</h4>
         <br>
<h5>Énoncé :</h5>
    <li> Créer une page serie04-Ex01-fonctions.php en utilisant le standard Bootsrap5</li><br>
    <li> Écrire une fonction php pour calculer la factorielle d’un nombre (un entier non négatif). La fonction accepte le nombre comme argument.</li><br>
     <li>L’appel de la fonction est réalisé sous le submit d’un formulaire.</li><br>
     <li>La figure suivante représente le résultat souhaité</li> <br>
     <img src="assets/img/Exercices-les-fonctions-en-php-Série-01.jpg" alt="Image 3"> <br>


            
    
    
    
    
    
        </p>
      </section>
      <section>
        <br>
        <h2>HTML :</h2>
        <p>“ Le World Wide Web (WWW) tel qu’il a été imaginé par Tim Berners‐Lee, aux alentours de 1990, s’articule autour d’une architecture dite client‐serveur. Dans le cas d’une navigation classique, le client c’est nous ou plutôt notre navigateur. Le serveur (ou plus précisément le serveur web), c’est un programme qui répond aux requêtes du navigateur grâce au protocole HTTP (HyperText Transfer Protocol).”</p>
        <BR>
        <h3>La structure d’un tableau en HTML : </h3>
        <br>
        
       <h4> Introduction :</h4>
         <br>
<h5>Énoncé :</h5>
    <li> Dans une page HTML 5, il est possible de réaliser une présentation d’informations de type textuelle ou graphique sous la forme de tableau. De la même manière que dans un tableur Excel ou OpenOffice.</li><br>
    <li> Un tableau créé en HTML 5 est composé de lignes et de colonnes.</li><br>
     <li>Un tableau vous permet de retrouver rapidement et facilement des valeurs au croisement entre différents types de données.</li><br>
     <br>
     <img src="assets/img/tableau-HTML.jpg" alt="Image 3"> <br>

<p> *La balise <.table> <br>
    <li> L’élément essentiel dans la création de tableaux en HTML 5 est la balise <.table>. ! </li> <br>
    <li> En HTML 5, un tableau se construit ligne par ligne. Dans chaque ligne (<.tr>), on indique le contenu des différentes cellules (<.td>). </li><br>
    <li> C’est avec la balise <.table> qui permet d’indiquer le début et la fin d’un tableau. </li><br>
    <li> Cette balise est conteneur renfermant tous les autres éléments de tableau. </li><br>
</p>
<p>*La balise <.caption> <br>
    <li> Le titre d’un tableau permet de renseigner rapidement le visiteur sur le contenu du tableau. </li> <br>
    <li> La balise <.caption> se place tout au début du tableau, c’est elle qui contient le titre du tableau </li><br>
    <li>La balise <.caption> définit le titre, la légende de tableau.</li><br>
    <li>Cette balise se place tout au début du tableau, juste avant l’en-tête. C’est elle qui contient le titre du tableau </li><br>
</p>
<p>*La balise <.tr> <br>
    <li>’élément HTML <tr> définit une ligne de cellules dans un tableau. Une ligne peut être constituée d’éléments <td> (les données des cellules) et <th> (les cellules d’en-têtes). </li> <br>
    </p>
      </section>
      <section>
        <h2> CSS :</h2>
        <p><li>Le terme CSS est l’acronyme anglais de Cascading Style Sheets qui peut se traduire par “feuilles de style en cascade”.</li><br>
    <li>Le CSS est un langage informatique utilisé sur l’internet pour mettre en forme les fichiers HTML.</li><br>
<li>Le but d’avoir le css dans vos sites c’est de compenser les manques du langage HTML en ce qui concerne la mise en page et la présentation</li><br>

</p> <br>

 <h4> Exercice 01 : </h4> <br>
<h5>Énoncé : </h5> <br>
 - Créez une page en HTML5 index.html que vous sauvegarderez dans le sous-répertoire tp03 et commencez à la remplir, avec sa déclaration de document, son en-tête et le corps du document ne contenant qu’un titre de niveau 1 “Introduction à la programmation web”.
<br>
Vérifiez l’encodage de votre page : attention à déclarer dans votre document Html que l’encodage est UTF-8, ainsi que lorsque vous sauvegardez votre fichier.
<br>
Complétez votre page afin qu’elle contienne les éléments suivants:
<br>
Le titre de la page “Programmation web” doit se trouver en titre sur le navigateur ;
<br>
Un paragraphe de présentation de la page expliquant son objectif, comme par exemple “Cette page a pour objectif de faire le point sur quelques informations en Html/Css.”. Une partie de ce texte devra être mise en valeur en italique ;
<br>
Un tableau de trois colonnes et au moins 4 lignes présentant plusieurs éléments.
<br>
Ce tableau doit comporter la légende “Cours de développement Web“, et avoir une ligne d’en-têtes comportant “Prénom & nom” en première colonne, “HTML” en deuxième colonne, et “CSS” en troisième colonne.
<br>
Remplissez le tableau par les informations correspondantes
<br>
Un lien vers une autre page, page detail_notes.html, comportant le même titre, un unique paragraphe contenant le texte suivant : “Cette page est une page d’examen.”, et un lien retour vers index.html.
Créez une feuille de style CSS “style.css” à laquelle vous ferez appel dans votre fichier Html afin de prendre en compte les éléments suivants de présentation :
<br>
<br>
<li>Les titres principaux doivent être de couleur bleue (#58acfa par exemple) et au centre de la page ;Le tableau doit ;</li>
<br>
<li>Comporter une bordure visible bleue (#58acfa par exemple);</li><br>
<li>Occupera toute la zone horizontale d’affichage,</li><br>
<li>Les cellules d’entête seront centrées et écrites en gras et en blanc sur fond noir,</li><br>
<li>Les cellules du corps seront en vert clair et en texte justifié,</li><br>
<li>Les cellules vides seront d’une couleur différente,</li><br>
<li>La légende sera positionnée en bas du tableau avec une couleur “#060” positionnée à gauche.</li><br>
<li>Faire en sorte que votre tableau doit ressembler à celui de la figure suivante:</li><br>

  </p>
     <br>
     <img src="assets/img/TP-03-CSS.jpg" alt="Image 3"> <br>
     <li>Faire en sorte que la police utilisée dans le paragraphe soit celle contenue dans ce fichier (police au format truetype)(Utilisez La règle @font-face).</li><br>
     <li>La règle @font-face permet de définir les polices d’écriture à utiliser pour afficher le texte de pages web. Cette police peut être chargée depuis un serveur distant ou depuis l’ordinateur de l’utilisateur.</li><br>
     <li>Si la fonction local() est utilisée, elle indique à l’agent utilisateur de prendre en compte une police présente sur le poste de l’utilisateur.</li><br>
     <li>Exemple: <br>
@font-face { <br>
font-family:'ma-police-ttf';<br>
src:local('ma-police'), url('ma_police.ttf') format('truetype');<br>
}</li><br>
<li>Les liens doivent s’afficher en cyan lorsque l’utilisateur passe sa souris dessus avec une taille de police double ;</li><br>
<li>Le texte mis en valeur doit s’afficher en rouge (en plus d’être en italique) ;</li><br>
<li>Créez une classe qui change lien des pages pour être un bouton comme celle-ci ;</li><br>
<img src="assets/img/TP-03-CSS-1.jpg" alt="Image 3">  <br>

<li>Et toute autre modification de style qui vous semblera pertinente.</li><br>

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
