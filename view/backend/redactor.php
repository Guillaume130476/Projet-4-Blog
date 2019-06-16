
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
    <div id="titreArticle" class="col-lg-12">
      <h2>
      Bienvenue  <?php echo  $_SESSION['nom'] . '  ' . $_SESSION['prenom'];
      ?>
      sur votre page d'administration 
      </h2>
    </div> 
    <h4>
      <a href="indexBackEnd.php?action=disconnect">Déconnexion</a>
    </h4>
    <section id="nouvelarticle" class="col-lg-offset-1 col-lg-5" >
      <div class="col-lg-12" id="titreArticle2">
        <h2>Créer un billet</h2>
      </div>
      <form class=" col-lg-12" action="indexBackEnd.php?action=addPost" method="post">
        <div class="bloctiny" >
          <label  for="auteur">
            Auteur :
          </label>
          <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text"  name="auteur" id="auteur" /><br />
        </div>
        <div class="bloctiny">
          <label for="titre">
            Titre :
          </label>
          <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text"  name="titre" id="titre" /><br/>
        </div>
        <div class="bloctiny">
          <label for="date">
            Date : 
          </label>
          <input  class="col-md-offset-1 col-md-9 col-md-offset-1" type="date" name="date" id="date" /><br />
        </div>
        <label for="mytextarea">Message :</label><textarea id="mytextarea" type="text" name="mytextarea"></textarea>
        <input class="submit" type="submit" value="Valider" id="submit_redactor" />
      </form>  
    </section>
    <section id="listebilletsenligne"  class="col-lg-offset-1 col-lg-4 col-lg-offset-1">
      <div id="commentaires" >
        <h2>billets en ligne</h2>
      </div>

      <div class="col-md-offset-1 col-md-9" id="listeArticle">
        <?php
        while ($donnees = $req->fetch())
          {
            ?>
          <div class="onearticle">
            
                  <?php
                  echo htmlspecialchars($donnees['id_author']);?> le 
                  <?php

                  echo htmlspecialchars($donnees['date_publi']);?>

                  <h4><?php
                  echo htmlspecialchars($donnees['Title']);
                  ?></h4>
              <a href="indexBackEnd.php?action=post&amp;billet=<?php echo $donnees['id']; ?>">Lire </a>
              <a href="indexBackEnd.php?action=mPost&amp;billet=<?php echo $donnees['id']; ?>">Modifier </a>
              <a href="indexBackEnd.php?action=dPost&amp;billet=<?php echo $donnees['id']; ?>">Supprimer</a>
            
          </div>
              <?php
            }
            $req->closeCursor();
            ?>
        </div>
    </section>
  </div> 

  <div class="row">
    <section id="listeCommentairesAV" class="col-xs-offset-2 col-xs-3" >
      <a href="indexBackEnd.php?action=avComment">
        Commentaires à valider
      </a>
    </section>

    <section id="listeCommentairesAV" class="col-xs-offset-2 col-xs-3" >
      <a href="indexBackEnd.php?action=DisplaySComment">
        Commentaires signalés
      </a>
    </section>
  </div>



    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>