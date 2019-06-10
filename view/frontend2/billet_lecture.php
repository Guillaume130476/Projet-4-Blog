
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
            <i class="fas fa-angle-left fa-2x"> 
            </i>
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
          <div  id="titreArticle">
            <h2><?=   htmlspecialchars($post['Title']) ?></h2>
        </div>
        <section class="col-md-offset-1 col-md-6" id="listeArticle"> 
          <div class="news">
            <h3>
             <p>Le <?= nl2br(htmlspecialchars($post['date_publi']))?></p>
            </h3>
              <p><?= nl2br(htmlspecialchars($post['Content']))?></p>
          </div>
        </section>

        <section class="col-md-offset-1 col-md-4" id="listeCommentaires">
          <div id="titreComments">
            <h3>Commentaires</h3>
          </div>

          <?php
           while ($comment = $comments->fetch())
            {
              ?>
          <div id="comment">
            <p>
              <strong><?= htmlspecialchars($comment['author']) ?></strong>
                le <?= $comment['date_comment'] ?>
            </p>
            <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
                <?= nl2br(htmlspecialchars($comment['id_billet'])) ?>
              <a href="view/indexBackEnd.php?action=sComment&amp;id=<?php echo $comment['id']; ?>">Signaler </a>
            </p>
          </div>
              <?php
                 }// Fin de la boucle des commentaires
                 ?>
        </section>
      </div>
    </div>

    <div id="Cfluid" class="container-fluid">

      <div class="row">
        <section id="formulaire2" class="col-xs-12">
          <form class="col-md-offset-1 col-md-6 col-xs-offset-1 col-xs-10" action="index.php?action=addComment&amp;billet=<?= $post['id'] ?>" method="post">
            <p>Ajouter un commentaire</p>
            <div class="form-group">
              <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="comment">Commentaire</label><br />
              <textarea id="comment" name="comment" class="form-control"></textarea><br />
            </div> 
            <div > 
              <input id="submitVC"  type="submit" />
            </div>
          </form>
        </section>
      </div>
    </div>

       <?php include("view/footer.php"); ?>


        <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php'); ?>