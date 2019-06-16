<?php ob_start(); ?>

<div id="bloc_page">

	<!-- HEADER -->

	
	<!-- DIAPORAMA -->      
	<?php include("../diaporama.php"); ?>

	<div class="container-fluid">  
		<div class="row">
			<div  id="titreArticle">
				<h2>L'Auteur</h2>	
			</div>
			<section id="Auteur" class="col-lg-offset-1 col-lg-10">
				<div id="texteAuteur" class="col-lg-8 col-sm-12">
					<p>
					Jean Forteroche est un écrivain français. 


					A l'âge de 16 ans, il s'engage dans la Royal Navy avec laquelle il servira lors de la Seconde Guerre mondiale dans les campagnes de l'Atlantique et de la Méditerranée. Il débute sa carrière maritime comme aspirant de marine sur un destroyer et sera transféré par la suite sur un navire lance-torpilles. A la fin de la guerre, il exerce plusieurs métiers, tels que loueur de bateaux ou policier. Il retourne dans l'armée active pour la Guerre de Corée puis est versé dans la réserve.

					En 1957, après avoir publié deux courtes nouvelles il écrit son premier roman "A Prayer for the Ship" qui est publié l'année suivante et qui est le début d'une longue carrière d'écrivain. 

					Dix ans plus tard, après avoir publié plusieurs romans, il retourne à son sujet de prédilection, à savoir les romans maritimes de l'époque napoléonienne et commence une longue série de romans qu'il signe sous le pseudonyme d'Alexander Kent (du nom d'un camarade tué pendant la guerre). 

					En juin 1968, le premier de ces romans "Cap sur la gloire" (To Glory we Steer) est publié, permettant à ses lecteurs de découvrir le personnage de Richard Bolitho.

					Outre la série "Bolitho", de loin celle qui a le plus connu le succès, Jean Forteroche a signé les livres de la série "Blackwood" (1982-2004) ainsi que "L'attaque vient de la mer" (Against the Sea, 1971), un recueil de ses premiers romans autobiographiques.

					En 2005, en plus de 36 romans racontant les exploits de Richard et Adam Bolitho, Forteroche a écrit 35 autres romans, traduits dans 14 langues différentes. 34 millions d'exemplaires auraient été vendus, dans une vingtaine de langues. 
					</p>
				</div>

				<figure id="photoAuteur" class="col-lg-4 col-sm-12">
					<img src="../../images/photoJF.jpg">
					<figcaption>Jean Forteroche</figcaption>
				</figure>
			</section>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('../template.php'); ?>
	 
	  

