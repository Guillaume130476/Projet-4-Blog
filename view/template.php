<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Bienvenue sur le site du nouveau livre de Jean Forteroche,Billet simple pour l'Alaska ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/blogfr/css/style.css">
    <link rel="stylesheet" href="http://localhost/blogfr/css/styles.css">
    <link rel="stylesheet" href="http://localhost/blogfr/css/tiny.css">
   
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://localhost/blogfr/js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: '#mytextarea',  // change this value according to your HTML
      language: 'fr_FR',
      entity_encoding : "raw",
      forced_root_block : "",
      force_br_newlines : true,
      force_p_newlines : false,
      invalid_elements : 'p',
       });
    </script>
    <title> Billet simple pour L'Alaska</title>
    <link rel="icon" href="http://localhost/blogfr/images/favicon2.ico" />
  
  </head>
        
  <body>
    <?php require("http://localhost/blogfr/view/header.php"); ?>
        <?= $content ?>
    <?php require("http://localhost/blogfr/view/footer.php"); ?>
      <!-- liens pour les fichiers javascript-->
    <script src="http://localhost/blogfr/js/jquery-3.3.1.js"></script>
    <script src="http://localhost/blogfr/js/diaporama.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  </body>
</html>