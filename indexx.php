<?php require_once("header.php");?>
<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


        <br>
        <br>
        <div class="container">
  <h2>apcpedagogie votre site de formation à distance</h2>
</div>
<br>
<section><p>     Bienvenue sur apcpedagogie!
Apprenez et révisez les examens Microsoft Office Spécialiste et les examens Microsoft Office Expert,à l'aide des vidéos des cours et des exercices interactifs.
Découvrir les astuces Microsoft Office Word, Excel, PowerPoint et Access...
Apprenez comment installer WordPress chez votre hébergeur ou en local en moins de cinq minutes et maîtrisez les fonctions de base de cet incroyable outil de création de site. Choisissez parmi plus de 10000 thèmes gratuits et rédigez vos premiers articles... Sélectionner les meilleurs tutoriels et cours de formations gratuits pour apprendre la programmation Android. Dans notre cours & tutoriels vous trouverez:
    <li>Des vidéos en ligne haute qualité HD.</li>
<li>Des cours qui s'adressent à toute personne.</li>
<li>Des tutoriels, astuces, conseils... bien ficelés pour vous aider.</li>
</p>
</section>

      </div>
    </div>

        

        <br>
        <br>
     
  <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Nos Cours </h3>
        <img src="assets/img/icon.jpg" alt="Image 3">
        <p>Le Bootstrap est un framework développé par l'équipe du réseau social Twitter. Proposé en open source (sous licence MIT), ce framework utilisant les langages HTML, CSS et JavaScript fournit aux développeurs des outils pour créer un site facilement.</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Nos Cours </h3>
        <img src="assets/img/icon2.jpg" alt="Image 3">
        <p>Le HTML 5 est un évolution logique du HTML 4.01 en le simplifiant sur certains points (comme le doctype) et en les actualisant en fonction de son utilisation et de sa distribution.
Le HTML5 est la dernière révision majeure du HTML.</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Nos Cours </h3>
        <img src="assets/img/icon3.jpg" alt="Image 3">
        <p>Le CSS est un langage de style qui définit la présentation des documents HTML. Par exemple, CSS couvre les polices, les couleurs, les marges, les lignes, la hauteur, la largeur, les images d'arrière-plan, les positionnements évolués et bien d'autres choses.</p>
      </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <br>
         
    <div class="row">
        <div class="col-md-8"> 
             <div class="embed-responsive embed-responsive-16by9">
                <iframe  src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
                </div>
        </div>
        <div class="col-md-4">
            <div>
                <h4>bootstrap</h4>
            <div class="embed-responsive-item">
                <iframe  src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          
            </div>
            </div>
            <br>
            <div>
            <h4>HTML5</h4> 
            <div class="embed-responsive-item">
                <iframe src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
                </div>
            </div>
            <br>
            <div>
            <h4>CSS3</h4>
            <div class="embed-responsive-item">
                <iframe src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div> 
    <?php require_once("footer.php");?>
 
  

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
        <script>
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
        </script>

    </body>
</html>
