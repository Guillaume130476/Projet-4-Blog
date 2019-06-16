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
<?php require("header.php"); ?>
<div id="titresession">
  <h2>
    Liste des messages signalés par les lecteurs  
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
            <p>

            <?php
            echo htmlspecialchars($donnees['author']);?> le 

            <?php
            echo htmlspecialchars($donnees['date_comment']);?></p><br>
             <?php

            echo htmlspecialchars($donnees['comment']);?><br>
          
          <a href="indexBackEnd.php?action=dSignalComment&amp;id=<?php echo $donnees['id']; ?>">Supprimer </a>
          <a href="indexBackEnd.php?action=cSignalComment&amp;id=<?php echo $donnees['id']; ?>">ignorer le signal </a> 
          </p>
          </div>
        <?php
        }
        $req->closeCursor();
        ?>
    </section>
  </div> 
</div>      
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
  