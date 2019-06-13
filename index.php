<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') { // lecture d'un billet en fonction de l'id du billet
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addComment') {  // ajout d'un commentaire par lecteur
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                echo '<script type="text/javascript">alert("le commentaire a été enregistré, il sera en ligne après validation");</script>';
                addComment($_GET['billet'], $_POST['author'], $_POST['comment']);
                
            }
            else {

                echo '<script type="text/javascript">alert("Veuillez remplir tous les champs demandés");</script>';

                
                ?>
    <script language="javascript">history.go(-1)</script>;<?php
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

     elseif ($_GET['action'] == 'dSignalComment') { // afficher les commentaires validés
        
            dSignalComment();

      }

      elseif ($_GET['action'] == 'connection') { // connection à l'admin 
            
            connection($_POST['login'],$_POST['pass']);
        
      }

        elseif ($_GET['action'] == 'mailing') { // envoi du message de contact
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['textarea']) && !empty($_POST['adresseMail'] )) {
            mailing($_POST['nom'],$_POST['prenom'],$_POST['textarea'],$_POST['adresseMail']);
        }
        else {
            echo '<script type="text/javascript">alert("Veuillez remplir tous les champs demandés");</script>';
                ?>
    <script language="javascript">history.go(-1)</script>;<?php
            
        }
      }




}
else {
    listPosts();
}