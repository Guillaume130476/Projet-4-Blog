

<?php ob_start(); ?>

    <div id="bloc_page">


      <!-- HEADER -->
      <?php include("view/header.php"); ?>

      <!-- DIAPORAMA -->      

      <section id="contenantdiapo">
      <!--contenant diaporama --> 
      <div id="titrelivre">
        <div id="boutons">
          <div class="prev">
            <i class="fas fa-angle-left fa-2x"></i>
          </div>
          <div class="next">
            <i class="fas fa-angle-right fa-2x"></i>
          </div>
        </div>
        <div id="billet">
          <img class="images" src="images/titrelivre.png" alt="paysage Alaska">
        </div>
      </div>
      <div id="diaporama">
        <img class="images" src="images/canada1.jpg" alt="paysage Alaska">
        <img class="images" src="images/canada2.jpg" alt="paysage Alaska" >
        <img class="images" src="images/canada3.jpg" alt="paysage Alaska" >
        <img class="images" src="images/canada4.jpg" alt="paysage Alaska" >
      </div>
    </section>

    <div class="container-fluid">  
      <div class="row">
        <div  id="titreArticle"><h2>Les derniers Articles</h2></div>
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

                <a href="index.php?action=post&amp;billet=<?php echo $donnees['id']; ?>">Lire le billet</a>
              </p>
            </div>
            <?php
          }
          $req->closeCursor();
          ?>
        </section>

        <div id="photos" class="col-md-offset-1 col-md-5" >
          <div class="col-lg-12" id="photo">
            <img src="images/ours2.jpg">
          </div>
          <div class="col-lg-12" id="photo">
            <img src="images/canoe.jpg">
          </div>
          <div class="col-lg-12" id="photo">
            <img src="images/cerf.jpg">
          </div>
          <div class="col-lg-12" id="photo">
            <img src="images/montagne.jpg">
          </div>
        </div>
        <?php include("view/footer.php"); ?>

      </div>
    </div>



    <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php'); ?>