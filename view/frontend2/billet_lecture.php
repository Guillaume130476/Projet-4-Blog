
<?php ob_start(); ?>

  <div id="bloc_page">  
    <!-- DIAPORAMA -->      
    <?php include("view/diaporama.php"); ?>

    <div class="container-fluid">  
      <div class="row">
          <div  id="titreArticle">
            <h2><?=   htmlspecialchars($post['Title']) ?></h2>
            <p><a href="http://localhost/blogfr/index.php">Retour</a></p>
        </div>
        <section class="col-md-offset-1 col-md-6" id="listeArticle"> 
          <div class="news">
            <h3>
             Le <?= nl2br(htmlspecialchars($post['date_publi']))?>
            </h3>
            <p><?= nl2br(htmlspecialchars($post['Content']))?></p>
          </div>
          <p>
            <a href="http://localhost/blogfr/index.php">Retour</a>
          </p>
        </section>

        <section class="col-md-offset-1 col-md-3 col-md-offset-1" id="listeCommentaires">
          <div id="titreComments">
            <h3>Commentaires</h3>
          </div>

          <?php
           while ($comment = $comments->fetch())
            {
              ?>
          <div class="comment">
            <p>
              <strong><?= htmlspecialchars($comment['author']) ?></strong>
                le <?= $comment['date_comment'] ?>
            </p>
            <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
              <a href="view/indexBackEnd.php?action=sComment&amp;id=<?php echo $comment['id']; ?>">Signaler </a>
            </p>
          </div>
              <?php
                 }// Fin de la boucle des commentaires
                 ?>
                 <p>
                  <a href="http://localhost/blogfr/index.php">Retour</a>
                </p>
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
                <input type="text" id="author" name="author" class="form-control" value="" />
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
  </div>
        <?php $content = ob_get_clean(); ?>

    <?php require('view/template.php'); ?>