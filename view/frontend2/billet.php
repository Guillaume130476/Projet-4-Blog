<?php ob_start(); ?>

  <div id="bloc_page">     
    <?php include("view/diaporama.php"); ?>

    <div class="container-fluid">  
      <div class="row">
        <div  id="titreArticle">
          <h2>Les derniers Articles</h2>
        </div>
      <section class="col-md-offset-1 col-md-5" id="listeArticle">
          <?php
          while ($donnees = $req->fetch())
          {
            ?>
          <div class="onearticle">
            <p >
                <?php
                echo htmlspecialchars($donnees['id_author']);?> le 
                <?php

                echo htmlspecialchars($donnees['date_publi']);?></p>

                <h4><?php
                echo htmlspecialchars($donnees['Title']);
                ?></h4>

              <p><a href="index.php?action=post&amp;billet=<?php echo $donnees['id']; ?>">Lire le billet</a>
            </p>
          </div>
            <?php
          }
          $req->closeCursor();
          ?>
      </section>

        <div id="photos" class="col-md-offset-1 col-md-5" >
          <div class="col-lg-12" id="photo">
            <img src="images/ours2.jpg" alt="ours brun">
          </div>
          <div class="col-lg-12" id="photo2">
            <img src="images/canoe.jpg" alt="paysage bateau lac Alaska">
          </div>
          <div class="col-lg-12" id="photo3" >
            <img src="images/cerf.jpg" alt="cerf">
          </div>
          <div class="col-lg-12" id="photo4">
            <img src="images/montagne.jpg" alt="montagne alaska" >
          </div>
        </div>
      </div>
  </div>
</div>



    <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php'); ?>