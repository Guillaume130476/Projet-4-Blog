<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>
<?php 

  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {

}
else {
  
    ?><script language="javascript">document.location="http://localhost/blogfr/view/frontEnd/login.php"</script>;<?php
}

 ?>

 
    <!-- HEADER -->
<?php include("header.php"); ?>
  
<div class="container-fluid">  

  <div class="row">

    <section id="nouvelarticle" class="col-lg-offset-1 col-lg-10" >
          <p><a href="indexBackEnd.php">Retour</a></p>
      <div class="col-lg-12" id="titreArticle2">   
      </div>
      <h3>Le <?= nl2br(htmlspecialchars($post['date_publi']))?></h3><h2><?=   htmlspecialchars($post['Title']) ?></h2>
      <form class=" col-lg-12" action="indexBackEnd.php?action=UDPost" method="post">
        <div class="bloctiny" >
          <input type="hidden" name="id" id="id" value="<?php echo ($_GET['billet']);?>">
          <label  for="auteur">
            Auteur :
          </label>
          <input class="col-xs-offset-1 col-xs-9 col-xs-offset-1" type="text"  name="auteur" value="Jean Forteroche" id="auteur" /><br />
        </div>
          <div class="bloctiny">
            <label for="titre">
              Titre :
            </label>
            <input class="col-xs-offset-1 col-xs-9 col-xs-offset-1" type="text"  name="titre" id="titre" value="<?= nl2br(htmlspecialchars($post['Title']))?>" /><br />
        </div>
        <div class="bloctiny">
          <label for="date">
            Date : 
          </label>
          <input  class="col-xs-offset-1 col-xs-9 col-xs-offset-1" type="date"  name="date" id="date" /><br />
        </div>
        <div class="bloctiny">
          <label for="mytextarea">
            Message :
          </label>
          <textarea id="mytextarea"  name="mytextarea">
            <p><?= nl2br(htmlspecialchars($post['Content']))?>  
            </p>
          </textarea>
        </div>
          <input class="submit" type="submit" value="Valider"  />
          <p>
            <a href="indexBackEnd.php">Retour</a>
          </p>
      </form> 
    </section>
  </div>
</div> 
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>