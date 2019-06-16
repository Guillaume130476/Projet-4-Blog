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


 <div id="bloc_page">
  <!-- HEADER -->
  <?php require("header.php"); ?>
  <div id="titresession">
    <h2>
      Liste des commentaires à valider
    </h2>
    <p>
      <a href="indexBackEnd.php">Retour</a>
    </p>
  </div>
  <div class="container-fluid"> 
    <div class="row"> 
      <section class="col-sm-offset-2 col-sm-8" id="listeArticle">
        <?php

        while ($donnees = $req->fetch())
        {
          ?>
          <div class="onearticle">
            <p >


              <?php
              echo htmlspecialchars($donnees['author']);?> le 

              <?php
              echo htmlspecialchars($donnees['date_comment']);?></p><br>
              <p>
              <?php

              echo htmlspecialchars($donnees['comment']);?><br>
              <a href="indexBackEnd.php?action=vBufferComment&amp;id=<?php echo $donnees['id']; ?>">Valider </a>
              <a href="indexBackEnd.php?action=dBufferComment&amp;id=<?php echo $donnees['id']; ?>">Supprimer </a>

            </p>
          </div>
          <?php
        }
        $req->closeCursor();
        ?>
      </section>
    </div> 
  </div>    
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>