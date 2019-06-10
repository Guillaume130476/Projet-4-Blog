

<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>




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
  <h4><a href="indexBackEnd.php?action=disconnect">Déconnexion</a></h4>
      <section id="nouvelarticle" class="col-lg-offset-1 col-lg-5" >
        <div class="col-lg-12" id="titreArticle2">
          <h2>Créer un billet</h2>
        </div>
        <form class=" col-lg-12" action="indexBackEnd.php?action=addPost" method="post">
          <div class="bloctiny" >
            <label  for="auteur">
              <p>Auteur :</p>
            </label>
            <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="auteur" id="auteur" /><br />
          </div>
          <div class="bloctiny">
            <label for="titre">
              <p>Titre :</p>
            </label>
            <input class="col-md-offset-1 col-md-9 col-md-offset-1" type="text" class="form-control" name="titre" id="titre" /><br />
          </div>
          <div class="bloctiny">
            <label for="date">
              <p>Date : </p>
            </label>
            <input  class="col-md-offset-1 col-md-9 col-md-offset-1" type="date" class="form-control" name="date" id="date" /><br />
          </div>
          <label for="mytextarea"><p>Message :</p></label><textarea id="mytextarea" type="text" name="mytextarea"></textarea>
          <input class="submit" type="submit" value="Valider" id="submit_redactor" />
        </form>  
      </section>
      <section id="listebilletsenligne"  class="col-lg-offset-1 col-lg-4 col-lg-offset-1">
        <div id="commentaires" ><h2>billets en ligne</h2></div>

        <section class="col-md-offset-1 col-md-5" id="listeArticle">
          <?php
          while ($donnees = $req->fetch())
          {
            ?>
          <div id="onearticle">
            <p >
                <?php
                echo htmlspecialchars($donnees['id_author']);?> le 
                <?php

                echo htmlspecialchars($donnees['date_publi']);?></p>

                <h4><?php
                echo htmlspecialchars($donnees['Title']);
                ?></h4>
              <a href="indexBackEnd.php?action=post&amp;billet=<?php echo $donnees['id']; ?>">Lire </a>
              <a href="indexBackEnd.php?action=mPost&amp;billet=<?php echo $donnees['id']; ?>">Modifier </a>
              <a href="indexBackEnd.php?action=dPost&amp;billet=<?php echo $donnees['id']; ?>">Supprimer</a>
            </p>
          </div>
            <?php
          }
          $req->closeCursor();
          ?>
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
        <?php include("footer.php"); ?>
      </div> 

      
  
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>