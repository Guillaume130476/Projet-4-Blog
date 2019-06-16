<?php ob_start(); ?>
  <div class="container-fluid">  
    <div class="row">
      <div  id="titreArticle">
        <h2>Formulaire de contact
        </h2>
      </div>
      <section id="formulaire" class="col-lg-12">
        <form class="col-md-offset-1 col-md-4  col-xs-12" id="formulaire_contact" method="post" action="../../index.php?action=mailing">
          <div class="form-group">
            <p> Envoyez-nous un message</p>
            <label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="prenom">Prénom : </label>
            <input id="prenom" name="prenom" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="textarea">Votre message : </label>
            <textarea id="textarea" name="textarea" type="textarea" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="adresseMail">Votre Email : </label>
            <input id="adresseMail" name="adresseMail" type="Email" class="form-control">
          </div>
          <input class="submit" id="submitContact" type="submit" value="Valider" />
        </form>
        <figure id="photocontact" class="col-md-offset-2 col-md-5 ">
          <img src="../../images/contact.jpg" alt="email">
        </figure>
      </section>
    </div>
  </div>
  <?php $content = ob_get_clean(); ?>

  <?php require('../template.php'); ?>

