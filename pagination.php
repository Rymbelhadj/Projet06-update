<?php 
include('menu.php');
//set session
session_start();
if(isset($_POST['nbrLignesAafficher'])){
    echo "eeee";
}

if(isset($_POST['nbrLignesAafficher'])){
    echo "eeee".$_POST['nbrLignesAafficher'];
  $_SESSION['nbrLignesAffiche']= $_POST['nbrLignesAafficher'];}
$limitLignesPage= isset($_SESSION['nbrLignesAffiche']) ? $_SESSION['nbrLignesAffiche']:5;

$page=(isset($_GET['page'])&& is_numeric($_GET['page'])) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limitLignesPage;
  $stmt=$pdo-> query("SELECT * FROM apprenants a, gouvernorats g WHERE a.cdegouvernorat=g.cdegouvernorat LIMIT $paginationStart, $limitLignesPage")->fetchAll();
  
  $reqSql ="SELECT count(*) AS nbrLignes FROM apprenants a, gouvernorats g WHERE a.cdegouvernorat=g.cdegouvernorat"; 
  $query= $pdo->prepare($reqSql);
  $query->execute();
  $resultat= $query->fetch();
  $toutesLignes = (int) $resultat['nbrLignes'];
  $totoalPages= ceil($toutesLignes / $limitLignesPage);
  $prec = $page - 1;
  $suiv = $page + 1;


?>
<!--
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
-->
<div class="container w-90">

<div class="row bb-4">
    <div class="col-lg-10">
	<a href="page_ajout_apprenant.php"><button class="btn btn-primary"> Ajouter un nouveau apprenant</button></a>
    </div>
<div class="col-lg-2">
 <!---------tableau---affichage----------->
 <form id="formNbrLignes" action="#" method="post">
      <select name="nbrLignesAafficher" id="nbrLignesAffiche" class="form-select">
      <option disabled selected>Nbr Lignes</option>
      <?php foreach([5,7,10,12] as $limitLignesPage) : ?>
<option 
<?php if(isset($_SESSION['nbrLignesAffiche']) && $_SESSION['nbrLignesAffiche']== $limitLignesPage)  echo 'selected'; ?> 
      value="<?= $limitLignesPage; ?>">  
      <?= $limitLignesPage; ?>     
              </option>
              <?php endforeach; ?>
              </select>
               
           </form>

</div>
<div class="card border-primary mb-3" style="border-width: 2px;">
  <div class="card-header">
        <nav class="navbar navbar-light">       
            <h2>Gestion des apprenants</h2>
           <form class="form-inline" method="post" action="#">
                <div class="input-group">
                    <input id="search-input" type="search" class="form-control" name="txtAfficher"placeholder="Rechercher...">  
                    <button id="search-button" type="submit" class="btn btn-primary" name="btnAfficher">
                    <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>     
        </nav>
  </div>
  <div class="card-body">
<?php  
if(isset($_POST["btnAfficher"]) && isset($_POST["txtAfficher"]))
{
    $apprenant=$_POST["txtAfficher"];
}else{
    $apprenant="";
}

/*
$stmt=$pdo-> prepare("SELECT * FROM apprenants a, gouvernorats g WHERE a.cdegouvernorat=g.cdegouvernorat".
    " and cinapprenant LIKE ?");
        $stmt->execute(['%'.$apprenant.'%']); */          
            echo "<table class='table table-striped table-bordered'><thead> <tr><th>CIN</th>
            <th>Prénom</th><th>Nom</th><th>Date de naissance</th>
            <th>Civilité</th>
            <th>Adresse</th>
            <th>Adresse mail</th><th>Gouvernorat</th>
            <th>Groupe</th><th   class='col-md-2' align='center'>Action</th></tr></thead><tbody>";
            /*while ($ligne=$stmt->fetch())*/
            foreach($stmt as $ligne){
                $civilite="Femme";
                if($ligne[4]== 1) { $civilite="Homme"; }
            echo "<tr><td>". $ligne[0]."</td>".
                "<td>". $ligne[1]."</td>".
                "<td>". $ligne[2]."</td>".
                "<td>". $ligne[3]."</td>".
                "<td>". $civilite."</td>".
                "<td>". $ligne[5]."</td>".
                "<td>". $ligne[6]."</td>".
                "<td>". htmlentities($ligne[12], ENT_QUOTES,'iso-8859-1')."</td>".
                "<td>". $ligne[8]."</td>"
                .'<td align="center">'
                ."<a href='page_edit_apprenant.php?id=". $ligne[0] ."' class='btn btn-outline-primary btn-sm   me-2'><span class='bi bi-eye'></span></a>"
                ."<a href='page_modifier_apprenant.php?id=". $ligne[0] ."' class='btn btn-outline-success btn-sm   me-2'><span class='bi bi-pencil'></span></a>"
                ."<a href='supprimer.php?id=". $ligne[0] ."' class='btn btn-outline-warning btn-sm   me-2' role='button' data-bs-toggle='button'><span class='bi bi-trash'></span></a>"
                .'</td></tr>';
            }
            echo "</tbody></table>";
            echo "</div>";
    /*}*/
?>
  </div>
</div>
</div>
<!----------Pagination------->

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php if ($page <= 1){echo 'disabled';} ?>">
      <a class="page-link" href="<?php if ($page <= 1){echo '#';} else {echo "?page=".$prec;} ?>" >Precedent</a>
    </li>
    <?php for ($i=1; $i<=$totoalPages; $i++) : ?>
    <li class="page-item <?php if ($page == $i){echo 'active';} ?>">
    <a class="page-link" href="?page=<?= $i; ?>">
    <?= $i; ?>
    </a>
    </li>
    <?php endfor; ?>
  
    <li class="page-item <?php if ($page >= $totoalPages){echo 'disabled';} ?>">
      <a class="page-link" href="<?php if ($page >= $totoalPages){echo '#';} else {echo "?page=".$suiv;} ?>">Suivant</a>
    </li>
  </ul>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#nbrLignesAffiche').change(function(){
    $('#formNbrLignes').submit();
  })
});
</script>
</div>
<?php 
include('menu.php');
?>