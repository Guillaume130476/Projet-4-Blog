<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['billet'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
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

       elseif ($_GET['action'] == 'mailing') { // connection à l'admin 
            
            mailing($_POST['nom'],$_POST['prenom'],$_POST['textarea'],$_POST['adresseMail']);
        
      }




}
else {
    listPosts();
}