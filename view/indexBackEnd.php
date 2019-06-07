<?php
require('../controller/controllerBackEnd.php');

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'listPosts') { //affichage de la liste des posts
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

    elseif ($_GET['action'] == 'mPost') { // affichage d'un post
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            mPost();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }

    elseif ($_GET['action'] == 'addComment') { //Ajouter un commentaire qui devra être validé
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

    elseif ($_GET['action'] == 'addPost') { // Ajouter un post
         
           
                addPost($_POST['titre'], $_POST['mytextarea'], $_POST['date'], $_POST['auteur']);
            
            }


    elseif ($_GET['action'] == 'UDPost') { //Mise à jour d'un Post
        
            

                UDPost($_POST['titre'], $_POST['mytextarea'], $_POST['date'], $_POST['auteur'],$_POST['id']);
            

        }

     elseif ($_GET['action'] == 'dPost') { // Effacer un Post
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            dPost();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }


     elseif ($_GET['action'] == 'dComment') { // effacer un commentaire
        
            dComment();

       
    }

    elseif ($_GET['action'] == 'avComment') { // afficher les commentaires non validés
        
            avComment();
     
    }


     elseif ($_GET['action'] == 'dBufferComment') { // Supprimer un commentaire : passage du buffer à la base commentaires validés
        
            dBufferComment();

       
    }


    elseif ($_GET['action'] == 'vBufferComment') { // Valider un commentaire : passage du buffer à la base commentaires validés
            
            vBufferComment();
            mBufferComment();
            

       
    }

    elseif ($_GET['action'] == 'sComment') { // signaler un commentaire  validés
        
            signalerComment();


      } 
    
    elseif ($_GET['action'] == 'DisplaySComment') { // afficher les commentaires validés
        
            DisplaySComment();

      }

    elseif ($_GET['action'] == 'dSignalComment') { // effacer le commentaire signalé
        
            dSignalComment();

      }

    elseif ($_GET['action'] == 'cSignalComment') { // annuler le signalement du commentaire 
        
            cSignalComment();

      }

    elseif ($_GET['action'] == 'disconnect') { // déconnexion session
        
            disconnect();

      }
    

}
else {
    listPosts();
    //verificationS();
}